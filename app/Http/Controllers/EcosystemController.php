<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcosystemController extends Controller
{
    public function adma()
    {
        return view('ecosystem.adma');
    }

    public function admo()
    {
        return view('ecosystem.admo');
    }

    public function apex()
    {
        return view('ecosystem.apex');
    }

    public function adds()
    {
        return view('ecosystem.adds');
    }

    public function abco()
    {
        return view('ecosystem.abco');
    }

    public function ario()
    {
        return view('ecosystem.ario');
    }

    public function hub()
    {
        return view('ecosystem.hub');
    }

    public function structure()
    {
        $team = \App\Models\TeamMember::orderBy('order')->get();
        $founders = $team->where('type', 'founder');
        $leadership = $team->where('type', 'leadership');
        $support = $team->where('type', 'support');

        return view('ecosystem.structure', compact('founders', 'leadership', 'support'));
    }
}
