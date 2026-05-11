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
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'meta' => 'required|string|max:255',
            'content' => 'required_if:type,manual|nullable|string',
            'external_url' => 'required_if:type,link|nullable|url',
        ]);

        // Handle Image 1
        $file = $request->file('image');
        $filename = time() . '_1_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/articles'), $filename);
        $data['image'] = '/uploads/articles/' . $filename;

        // Handle Image 2
        if ($request->hasFile('image_2')) {
            $file2 = $request->file('image_2');
            $filename2 = time() . '_2_' . $file2->getClientOriginalName();
            $file2->move(public_path('uploads/articles'), $filename2);
            $data['image_2'] = '/uploads/articles/' . $filename2;
        }

        // Handle Image 3
        if ($request->hasFile('image_3')) {
            $file3 = $request->file('image_3');
            $filename3 = time() . '_3_' . $file3->getClientOriginalName();
            $file3->move(public_path('uploads/articles'), $filename3);
            $data['image_3'] = '/uploads/articles/' . $filename3;
        }

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
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'meta' => 'required|string|max:255',
            'content' => 'required_if:type,manual|nullable|string',
            'external_url' => 'required_if:type,link|nullable|url',
        ]);

        // Handle Image 1
        if ($request->hasFile('image')) {
            if ($article->image && str_starts_with($article->image, '/uploads/')) {
                $oldFile = public_path($article->image);
                if (file_exists($oldFile)) { unlink($oldFile); }
            }
            $file = $request->file('image');
            $filename = time() . '_1_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/articles'), $filename);
            $data['image'] = '/uploads/articles/' . $filename;
        }

        // Handle Image 2
        if ($request->hasFile('image_2')) {
            if ($article->image_2 && str_starts_with($article->image_2, '/uploads/')) {
                $oldFile2 = public_path($article->image_2);
                if (file_exists($oldFile2)) { unlink($oldFile2); }
            }
            $file2 = $request->file('image_2');
            $filename2 = time() . '_2_' . $file2->getClientOriginalName();
            $file2->move(public_path('uploads/articles'), $filename2);
            $data['image_2'] = '/uploads/articles/' . $filename2;
        }

        // Handle Image 3
        if ($request->hasFile('image_3')) {
            if ($article->image_3 && str_starts_with($article->image_3, '/uploads/')) {
                $oldFile3 = public_path($article->image_3);
                if (file_exists($oldFile3)) { unlink($oldFile3); }
            }
            $file3 = $request->file('image_3');
            $filename3 = time() . '_3_' . $file3->getClientOriginalName();
            $file3->move(public_path('uploads/articles'), $filename3);
            $data['image_3'] = '/uploads/articles/' . $filename3;
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Article $article)
    {
        $images = [$article->image, $article->image_2, $article->image_3];
        foreach ($images as $img) {
            if ($img && str_starts_with($img, '/uploads/')) {
                $file = public_path($img);
                if (file_exists($file)) { unlink($file); }
            }
        }

        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
