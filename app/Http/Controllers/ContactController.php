<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Here we would normally send an email or save to DB
        // For now, we simulate a successful submission

        return back()->with('success', 'Thank you for your message. Our team will contact you shortly!');
    }
}
