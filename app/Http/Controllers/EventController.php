<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index()
    {
        // Get upcoming published webinars
        $webinars = Event::published()
            ->upcoming()
            ->webinars()
            ->ordered()
            ->get();

        // Get upcoming published in-person events
        $events = Event::published()
            ->upcoming()
            ->inPerson()
            ->ordered()
            ->get();

        return Inertia::render('Events', [
            'webinars' => $webinars,
            'events' => $events
        ]);
    }
}
