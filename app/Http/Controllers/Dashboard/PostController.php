<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::wherePublishment('published')->get();
        $posts = Post::filter(request())->paginate(10 ?? $_GET['row']);
        return view('dashboard.post.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'url' => route('dashboard.post.store'),
            'method' => "create",
            'categories' => Category::all(),
        ];

        return view('dashboard.post._form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|unique:posts',
                'body' => 'required',
                'category' => 'required',
            ]);

            $post = new Post();
            $post->name = $request->name;
            $post->body = $request->body;
            $post->category_id = $request->category;
            $post->slug = Str::slug($request->name);
            $post->publishment = $request->publishment == 'on' ? 'published' : 'draft';
            $post->save();

            if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
                $post->addMediaFromRequest('cover')->toMediaCollection('cover');
            }

            return redirect()->route('dashboard.post.index')->with('success', 'Artikel berhasil dibuat');
        } catch (\Throwable $th) {
            return redirect()->route('admin.course.create')->withInput()->with('error', 'Ada kesalahan !!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'url' => route('dashboard.post.update', $id),
            'method' => "update",
            'categories' => Category::all(),
            'post' => Post::findOrFail($id),
        ];

        return view('dashboard.post._form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required|unique:posts,name,' . $id,
                'body' => 'required',
                'category' => 'required',
            ]);

            $post = Post::findOrFail($id);
            $post->name = $request->name;
            $post->body = $request->body;
            $post->category_id = $request->category;
            $post->slug = Str::slug($request->name);
            $post->publishment = $request->publishment == 'on' ? 'published' : 'draft';
            $post->save();

            if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
                $post->clearMediaCollection('cover');
                $post->addMediaFromRequest('cover')->toMediaCollection('cover');
            }

            return redirect()->route('dashboard.post.index')->with('success', 'Artikel berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->route('admin.course.create')->withInput()->with('error', 'Ada kesalahan !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
