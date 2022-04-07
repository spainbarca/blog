<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        return view('landing', [
            'category' => $category,
            'posts' => $category->posts()->paginate(2),
        ]);
    }
}
