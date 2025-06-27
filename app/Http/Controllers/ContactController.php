<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'consent' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $validator->validated();

        try {
            // Create simple text email content
            $emailText = "NEW CONTACT FORM SUBMISSION\n";
            $emailText .= "=" . str_repeat("=", 40) . "\n\n";
            $emailText .= "Name: {$data['first_name']} {$data['last_name']}\n";
            $emailText .= "Email: {$data['email']}\n";
            if (!empty($data['phone'])) {
                $emailText .= "Phone: {$data['phone']}\n";
            }
            $emailText .= "Subject: {$data['subject']}\n";
            $emailText .= "Submitted: " . now()->format('F j, Y \a\t g:i A T') . "\n\n";
            $emailText .= "MESSAGE:\n";
            $emailText .= str_repeat("-", 20) . "\n";
            $emailText .= $data['message'] . "\n";
            $emailText .= str_repeat("-", 20) . "\n\n";
            $emailText .= "This message was sent from the Pharmacist Evolve contact form.\n";
            $emailText .= "You can reply directly to this email to respond to the sender.";

            // Send simple text email (no template)
            Mail::raw($emailText, function ($mail) use ($data) {
                $mail->to('info@pharmacistevolve.com')
                    ->cc('ade.segs@yahoo.com')
                    ->subject('New Contact Form Submission: ' . $data['subject'])
                    ->replyTo($data['email'], $data['first_name'] . ' ' . $data['last_name'])
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });

            return back()->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');

        } catch (\Exception $e) {
            \Log::error('Contact form email failed: ' . $e->getMessage());
            
            return back()->with('error', 'There was an issue sending your message. Please try again or contact us directly at info@pharmacistevolve.com');
        }
    }
}
