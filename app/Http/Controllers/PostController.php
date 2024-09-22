<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function api_index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('posts.index')->with('status', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $posts = Post::all();

        return view('posts.show', compact('post'));
    }
    // Display the specified post
    public function api_show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $posts = Post::all();

        return view('posts.update', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $posts = Post::all();

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $posts = Post::all();

        $post->delete();
        return redirect()->route('posts.index');
    }
}
