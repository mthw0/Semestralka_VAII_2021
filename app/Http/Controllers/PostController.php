<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'    => 'required|string|unique:posts|min:5|max:100',
            'content'  => 'required|string|min:5',
            'category' => 'required|string|max:30'
        ]);

        $validated['slug'] = Str::slug($validated['title'], '-');

        $post = Post::create($validated);

        return redirect(route('posts.index'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title'    => 'required|string|min:5|max:100',
            'content'  => 'required|string|min:5',
            'category' => 'required|string|max:30'
        ]);

        $validated['slug'] = Str::slug($validated['title'], '-');

        $post->update($validated);

        return redirect(route('posts.index'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}
