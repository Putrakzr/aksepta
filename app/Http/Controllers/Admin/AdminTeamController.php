<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = TeamMember::orderBy('type')->orderBy('order')->get();
        return view('admin.team.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'type' => 'required|in:founder,leadership,support',
            'tags' => 'nullable|string',
            'bio' => 'nullable|string',
            'photo' => 'nullable|url',
            'icon' => 'nullable|string',
            'order' => 'required|integer',
        ]);

        TeamMember::create($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamMember $team)
    {
        return view('admin.team.edit', ['member' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $team)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'type' => 'required|in:founder,leadership,support',
            'tags' => 'nullable|string',
            'bio' => 'nullable|string',
            'photo' => 'nullable|url',
            'icon' => 'nullable|string',
            'order' => 'required|integer',
        ]);

        $team->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team member removed successfully.');
    }
}
