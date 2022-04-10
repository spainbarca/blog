<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($photo){
            $photoPath = str_replace('storage', 'public', $photo->url);
            Storage::delete($photoPath);
        });
    }
}
