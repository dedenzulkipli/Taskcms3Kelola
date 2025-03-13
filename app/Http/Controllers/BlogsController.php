<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    /**
     * Tampilkan daftar blog.
     */
    public function index()
    {
        $blogs = Blogs::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Tampilkan form tambah blog.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Simpan data blog baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload Gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blogs::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail blog.
     */
    public function show(Blogs $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Tampilkan form edit blog.
     */
    public function edit(Blogs $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update data blog.
     */
    public function update(Request $request, Blogs $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Jika ada gambar baru, hapus yang lama
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        // Update data blog
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil diperbarui.');
    }

    /**
     * Hapus data blog.
     */
    public function destroy(Blogs $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dihapus.');
    }
}

