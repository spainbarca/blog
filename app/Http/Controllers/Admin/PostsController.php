<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::published()->get();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'title' => 'required',
             ]);

        $post = Post::create($request->only('title'));

        return redirect()->route('admin.posts.edit',$post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $categories=Category::all();
        $tags=Tag::all();
        return view('admin.posts.edit', compact('categories', 'tags', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, Request $request)
    {
         $this->validate($request, [
             'title' => 'required',
             'excerpt' => 'required',
             'body' => 'required',
             'category' => 'required',
             'tags' => 'required'
         ]);

         $post->title = $request->get('title');
         $post->body = $request->get('body');
         $post->excerpt = $request->get('excerpt');
         $post->youtube = $request->get('youtube');
         $post->soundcloud = $request->get('soundcloud');
         $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
         $post->category_id = $request->get('category');
         //etiquetas
         $post->save();

         $post->tags()->sync($request->get('tags'));
         return redirect()->route('admin.posts.edit', $post)->with('flash', 'Tu publicación ha sido creada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
