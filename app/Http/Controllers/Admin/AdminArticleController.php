<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = \App\Models\Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:manual,link',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'meta' => 'required|string|max:255',
            'content' => 'required_if:type,manual|nullable|string',
            'external_url' => 'required_if:type,link|nullable|url',
        ]);

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('storage/articles'), $filename);
        $data['image'] = '/storage/articles/' . $filename;

        \App\Models\Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Article $article)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:manual,link',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'meta' => 'required|string|max:255',
            'content' => 'required_if:type,manual|nullable|string',
            'external_url' => 'required_if:type,link|nullable|url',
        ]);

        if ($request->hasFile('image')) {
            if ($article->image && str_starts_with($article->image, '/storage/')) {
                $oldFile = public_path($article->image);
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/articles'), $filename);
            $data['image'] = '/storage/articles/' . $filename;
        } else {
            unset($data['image']);
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Article $article)
    {
        if ($article->image && str_starts_with($article->image, '/storage/')) {
            $oldFile = public_path($article->image);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }

        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
