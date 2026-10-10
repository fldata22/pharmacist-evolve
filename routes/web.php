<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\WaitlistController;
use App\Http\Controllers\DelegateController;
use App\Http\Controllers\ProgrammeInterestController;
use App\Http\Controllers\EmployerEnquiryController;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('home');

// The old overlapping coaching services were retired in the 2026 relaunch in
// favour of the two focused programmes. Redirect the old URLs to the new pages
// so existing links and search results still land somewhere relevant.
Route::redirect('/services', '/for-pharmacists')->name('services');
Route::redirect('/services/group-mentoring', '/for-pharmacists')->name('services.group-mentoring');
Route::redirect('/services/ospap-coaching', '/for-pharmacists')->name('services.ospap-coaching');
Route::redirect('/services/workforce-integration', '/for-employers')->name('services.workforce-integration');

// Two core service pages: individuals (Transition Programme) and employers
// (Integration Partnership). Each has a public enquiry form.
Route::get('/for-pharmacists', function () {
    return Inertia::render('ForPharmacists');
})->name('for-pharmacists');

Route::post('/for-pharmacists/register-interest', [ProgrammeInterestController::class, 'store'])
    ->name('for-pharmacists.register-interest');

Route::get('/for-employers', function () {
    return Inertia::render('ForEmployers');
})->name('for-employers');

Route::post('/for-employers/enquire', [EmployerEnquiryController::class, 'store'])
    ->name('for-employers.enquire');

Route::get('/resources', function () {
    return Inertia::render('Resources');
})->name('resources');

Route::get('/conference', function () {
    return Inertia::render('Conference');
})->name('conference');

Route::get('/programme', function () {
    return Inertia::render('Programme');
})->name('programme');

Route::get('/events', [EventController::class, 'index'])->name('events');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/collaborate', function () {
    return Inertia::render('Collaborate');
})->name('collaborate');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/book-consultation', function () {
    return Inertia::render('BookConsultation');
})->name('book-consultation');

Route::get('/waitlist', [WaitlistController::class, 'index'])->name('waitlist');
Route::post('/waitlist', [WaitlistController::class, 'store'])->name('waitlist.store');

Route::get('/delegates', [DelegateController::class, 'index'])->name('delegates');

Route::get('/cookies', function () {
    return Inertia::render('Cookies');
})->name('cookies');

Route::get('/privacy', function () {
    return Inertia::render('Privacy');
})->name('privacy');

Route::get('/terms', function () {
    return Inertia::render('Terms');
})->name('terms');
