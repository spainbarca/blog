<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PhotosController extends Controller
{
    public function store(Post $post)
    {
        return 'Procesando imagen...';
    }
}
