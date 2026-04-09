<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docs = \App\Models\Documentation::latest()->get();
        return view('admin.documentations.index', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documentations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'date' => 'required|string|max:255',
        ]);

        \App\Models\Documentation::create($data);

        return redirect()->route('admin.documentations.index')->with('success', 'Document added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Documentation $documentation)
    {
        return view('admin.documentations.edit', compact('documentation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Documentation $documentation)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'date' => 'required|string|max:255',
        ]);

        $documentation->update($data);

        return redirect()->route('admin.documentations.index')->with('success', 'Document updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Documentation $documentation)
    {
        $documentation->delete();
        return redirect()->route('admin.documentations.index')->with('success', 'Document deleted successfully.');
    }
}
