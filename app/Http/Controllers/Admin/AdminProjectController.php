<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = \App\Models\Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'description' => 'required|string',
        ]);

        $path = $request->file('image')->store('projects', 'public');
        $data['image'] = '/storage/' . $path;

        \App\Models\Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it's a local file
            if ($project->image && str_starts_with($project->image, '/storage/')) {
                $oldPath = str_replace('/storage/', '', $project->image);
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = '/storage/' . $path;
        } else {
            unset($data['image']);
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Project $project)
    {
        // Delete image file
        if ($project->image && str_starts_with($project->image, '/storage/')) {
            $oldPath = str_replace('/storage/', '', $project->image);
            Storage::disk('public')->delete($oldPath);
        }

        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
