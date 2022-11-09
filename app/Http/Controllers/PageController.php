<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::query()
            ->where('published', true)
            ->latest()
            ->get();

        return view('pages.home', ['posts' => $posts]);
    }
    public function show(Request $request)
    {
        $post = Post::query()
            ->where('id', $request->id)
            ->where('slug', $request->slug)
            ->where('published', true)
            ->firstOrFail();

        return view('admin.posts.show', ['post' => $post]);
    }
}
