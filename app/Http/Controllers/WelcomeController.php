<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Ambil artikel terbaru dengan status published menggunakan scope
        $posts = Post::with(['user', 'category'])
                    ->published()
                    ->orderBy('created_at', 'desc')
                    ->paginate(6);

        // Ambil artikel populer berdasarkan views
        $popularPosts = Post::with(['user', 'category'])
                           ->published()
                           ->orderBy('views', 'desc')
                           ->take(3)
                           ->get();

        return view('welcome', compact('posts', 'popularPosts'));
    }

    public function show($slug)
    {
        $post = Post::with(['user', 'category'])
                    ->where('slug', $slug)
                    ->published()
                    ->firstOrFail();

        // Increment views
        $post->increment('views');

        // Artikel terkait berdasarkan kategori
        $relatedPosts = Post::with(['user', 'category'])
                           ->where('category_id', $post->category_id)
                           ->where('id', '!=', $post->id)
                           ->published()
                           ->orderBy('created_at', 'desc')
                           ->take(3)
                           ->get();

        return view('artikel.show', compact('post', 'relatedPosts'));
    }
}