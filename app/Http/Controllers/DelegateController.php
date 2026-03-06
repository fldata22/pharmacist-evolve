<?php

namespace App\Http\Controllers;

use App\Models\Delegate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DelegateController extends Controller
{
    /**
     * Display the delegates listing page.
     */
    public function index()
    {
        $delegates = Delegate::published()
            ->ordered()
            ->get();

        // Group delegates by type for easier display
        $groupedDelegates = [
            'speakers' => $delegates->where('delegate_type', 'speaker')->values(),
            'partners' => $delegates->where('delegate_type', 'partner')->values(),
            'sponsors' => $delegates->where('delegate_type', 'sponsor')->values(),
            'attendees' => $delegates->where('delegate_type', 'attendee')->values(),
        ];

        return Inertia::render('Delegates', [
            'delegates' => $delegates,
            'groupedDelegates' => $groupedDelegates,
            'stats' => [
                'total' => $delegates->count(),
                'speakers' => $groupedDelegates['speakers']->count(),
                'partners' => $groupedDelegates['partners']->count(),
                'sponsors' => $groupedDelegates['sponsors']->count(),
                'attendees' => $groupedDelegates['attendees']->count(),
            ],
        ]);
    }
}
