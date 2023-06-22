<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function article()
    {
        $categories = Category::wherePublishment('published')->get();
        $posts = Post::wherePublishment('published')->filter(request())->paginate(10);
        $postslatest = Post::wherePublishment('published')->latest()->take(5)->get();
        return view('article.index', compact('categories', 'posts', 'postslatest'));
    }

    public function articleShow($slug)
    {
        $post = Post::whereSlug($slug)->first();
        return view('article.show', compact('post'));
    }
}
