<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::published()
            ->ordered()
            ->get();

        return Inertia::render('Testimonials', [
            'testimonials' => $testimonials
        ]);
    }
}
