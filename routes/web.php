<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Placeholder routes for navigation links
Route::get('/services', function () {
    return Inertia::render('Services');
})->name('services');

Route::get('/services/group-mentoring', function () {
    return Inertia::render('Services/GroupMentoring');
})->name('services.group-mentoring');

Route::get('/services/ospap-coaching', function () {
    return Inertia::render('Services/OSPAPCoaching');
})->name('services.ospap-coaching');

Route::get('/services/workforce-integration', function () {
    return Inertia::render('Services/WorkforceIntegration');
})->name('services.workforce-integration');

Route::get('/events', function () {
    return Inertia::render('Events');
})->name('events');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/testimonials', function () {
    return Inertia::render('Testimonials');
})->name('testimonials');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/collaborate', function () {
    return Inertia::render('Collaborate');
})->name('collaborate');

Route::get('/blog', function () {
    return Inertia::render('Blog');
})->name('blog');

Route::get('/book-consultation', function () {
    return Inertia::render('BookConsultation');
})->name('book-consultation');

Route::get('/cookies', function () {
    return Inertia::render('Cookies');
})->name('cookies');

Route::get('/privacy', function () {
    return Inertia::render('Privacy');
})->name('privacy');

Route::get('/terms', function () {
    return Inertia::render('Terms');
})->name('terms');
