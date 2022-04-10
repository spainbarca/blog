<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('posts');
        Post::truncate();
        Category::truncate();
        Tag::truncate();

        $category=new Category;
        $category->name = "Categoría 1";
        $category->save();

        $category=new Category;
        $category->name = "Categoría 2";
        $category->save();

        $post = new Post;
        $post->title = "Mi primer post";
        $post->url = Str::slug($post->title);
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->published_at = Carbon::now();
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 1']));

        $post = new Post;
        $post->title = "Mi segundo post";
        $post->url = Str::slug($post->title);
        $post->excerpt = "Extracto de mi segundo post";
        $post->body = "<p>Contenido de mi segundo post</p>";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 2']));

        $post = new Post;
        $post->title = "Mi tercer post";
        $post->url = Str::slug($post->title);
        $post->excerpt = "Extracto de mi tercer post";
        $post->body = "<p>Contenido de mi tercer post</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 3']));

        $post = new Post;
        $post->title = "Mi cuarto post";
        $post->url = Str::slug($post->title);
        $post->excerpt = "Extracto de mi cuarto post";
        $post->body = "<p>Contenido de mi cuarto post</p>";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 4']));

        $post = new Post;
        $post->title = "Mi quinto post";
        $post->url = Str::slug($post->title);
        $post->excerpt = "Extracto de mi quinto post";
        $post->body = "<p>Contenido de mi quinto post</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 5']));
    }
}
