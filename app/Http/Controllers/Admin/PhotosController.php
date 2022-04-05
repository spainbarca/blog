<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function store(Post $post)
    {

        $photo = request()->file('photo')->store('public');

        $photoUrl= Storage::url($photo);

        Photo::create([
            'url' => $photoUrl,
            'post_id' => $post->id,
        ]);
    }

    public function destroy (Photo $photo)
    {
        $photo->delete();

        $photoPath = str_replace('storage', 'public', $photo->url);
        Storage::delete($photoPath);

        return back()->with('flash', 'Foto eliminada');
    }
}
