<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::published()->get();

        return view('landing', compact('posts'));
    }
}
