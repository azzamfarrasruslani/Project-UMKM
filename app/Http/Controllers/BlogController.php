<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); // Ubah variabel menjadi plural
        return view('blog.index', compact('blogs')); // Pastikan menggunakan 'blogs' pada view
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_blog' => 'required|string|max:255',
            'konten_blog' => 'required|string',
            'gambar_blog' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $blog = new Blog();
        $blog->judul_blog = $request->judul_blog;
        $blog->konten_blog = $request->konten_blog;

        if ($request->hasFile('gambar_blog')) {
            $blog->gambar_blog = $request->file('gambar_blog')->store('images', 'public');
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog berhasil ditambahkan!');
    }

    public function show(Blog $blog)
    {
        //
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog')); // Pastikan menggunakan 'blog'
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'judul_blog' => 'required|string|max:255',
            'konten_blog' => 'required|string',
            'gambar_blog' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('gambar_blog')) {
            $blog->gambar_blog = $request->file('gambar_blog')->store('images', 'public');
        }

        $blog->update($validated);

        return redirect()->route('blog.index')->with('success', 'Blog berhasil diperbarui!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog berhasil dihapus!');
    }
}
