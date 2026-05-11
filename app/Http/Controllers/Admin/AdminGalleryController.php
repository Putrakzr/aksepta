<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = \App\Models\Gallery::latest()->get();
        return view('admin.galleries.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        $path = $request->file('image')->store('galleries', 'public');

        \App\Models\Gallery::create([
            'image' => Storage::url($path),
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery image added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Gallery $gallery)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        // Delete old image
        if ($gallery->image) {
            $oldPath = str_replace('/storage/', '', $gallery->image);
            Storage::disk('public')->delete($oldPath);
        }

        $path = $request->file('image')->store('galleries', 'public');

        $gallery->update([
            'image' => Storage::url($path),
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Gallery $gallery)
    {
        if ($gallery->image) {
            $oldPath = str_replace('/storage/', '', $gallery->image);
            Storage::disk('public')->delete($oldPath);
        }

        $gallery->delete();
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery image removed successfully.');
    }
}
