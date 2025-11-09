<?php

namespace App\Http\Controllers;

use App\Models\Waitlist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WaitlistController extends Controller
{
    public function index()
    {
        return Inertia::render('Waitlist');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|max:255',
            'country' => 'required|max:255',
            'qualification' => 'nullable|max:255',
            'message' => 'nullable',
            'program_interest' => 'required|in:ospap_coaching,group_mentoring,summit',
        ]);

        // Set default status
        $validated['status'] = 'pending';

        // Create waitlist entry
        Waitlist::create($validated);

        return redirect()->back()->with('success', 'Thank you for joining our waitlist! We\'ll be in touch soon.');
    }
}
