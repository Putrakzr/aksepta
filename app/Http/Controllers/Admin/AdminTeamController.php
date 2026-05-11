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
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'icon' => 'nullable|string',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/team'), $filename);
            $data['photo'] = '/storage/team/' . $filename;
        }

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
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'icon' => 'nullable|string',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('photo')) {
            if ($team->photo && str_starts_with($team->photo, '/storage/')) {
                $oldFile = public_path($team->photo);
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/team'), $filename);
            $data['photo'] = '/storage/team/' . $filename;
        } else {
            unset($data['photo']);
        }

        $team->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $team)
    {
        if ($team->photo && str_starts_with($team->photo, '/storage/')) {
            $oldFile = public_path($team->photo);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }

        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team member removed successfully.');
    }
}
