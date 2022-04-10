<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    public function store(Post $post)
    {
        $post->photos()->create([
            'url' =>  '/storage/'.request()->file('photo')->store('posts','public'),
        ]);
    }

    public function destroy (Photo $photo)
    {
        $photo->delete();
        return back()->with('flash', 'Foto eliminada');
    }
}
