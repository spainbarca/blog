<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'url';
    }

    protected $fillable = [
        'title',
        'body',
        'excerpt',
        'youtube',
        'soundcloud',
        'published_at',
        'category_id',
    ];
    protected $dates = ['published_at'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($post){
            $post->tags()->detach();
            $post->photos->each->delete();
        });
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function scopePublished($query)
    {
        $query->whereNotNull('published_at')
            ->where('published_at', '<=', Carbon::now())
            ->latest('published_at');
    }

    public static function create(array $attributes = [])
    {
        $post = static::query()->create($attributes);
        $post->generateUrl();

        return $post;
    }

    public function generateUrl()
    {
        $url = Str::slug($this->title);

        if ($this->where('url', $url)->exists())
        {
            $url = "{$url}-{$this->id}";
        }

        $this->url = $url;

        $this->save();
    }

    public function setPublishedAtAttribute($published_at)
    {
        $this->attributes['published_at'] = $published_at ? Carbon::parse($published_at) : null;
    }

    public function setCategoryIdAttribute($category)
    {
        $this->attributes['category_id'] = Category::find($category)
        ? $category
        : Category::create(['name' => $category])->id;
    }

    public function syncTags($tags)
    {
        $tagIds = collect($tags)->map(function($tag){
            return Tag::find($tag) ? $tag : Tag::create(['name' => $tag])->id;
         });

         return $this->tags()->sync($tagIds);
    }
}
