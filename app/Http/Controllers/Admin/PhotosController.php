<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function store(Post $post)
    {
        /* $this->validate(request(), [
            'photo' => 'required|image|max:2048' //
        ]); */
        $photo = request()->file('photo');
        $photoUrl = $photo->store('public');

        $photoUrl= Storage::url($photoUrl);

        Photo::create([
            'url' => Storage::url($photo),
            'post_id' => $post->id,
        ]);
    }
}
