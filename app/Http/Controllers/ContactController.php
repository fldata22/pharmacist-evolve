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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'enquiry_type' => 'required|in:programme,employer,events_sponsorship,partnerships,other',
            'message' => 'required|string|max:2000',
            'consent' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $validator->validated();

        $types = [
            'programme' => 'Programme questions',
            'employer' => 'Employer support',
            'events_sponsorship' => 'Events or sponsorship',
            'partnerships' => 'Partnerships',
            'other' => 'Other enquiry',
        ];
        $typeLabel = $types[$data['enquiry_type']] ?? 'Enquiry';

        try {
            $emailText = "NEW CONTACT FORM SUBMISSION\n";
            $emailText .= str_repeat('=', 41)."\n\n";
            $emailText .= "Name: {$data['name']}\n";
            $emailText .= "Email: {$data['email']}\n";
            $emailText .= "Enquiry type: {$typeLabel}\n";
            $emailText .= 'Submitted: '.now()->format('F j, Y \a\t g:i A T')."\n\n";
            $emailText .= "MESSAGE:\n";
            $emailText .= str_repeat('-', 20)."\n";
            $emailText .= $data['message']."\n";
            $emailText .= str_repeat('-', 20)."\n\n";
            $emailText .= "Sent from the Pharmacist Evolve contact form. Reply directly to respond to the sender.";

            Mail::raw($emailText, function ($mail) use ($data, $typeLabel) {
                $mail->to('support@pharmacistevolve.com')
                    ->cc('faithadebimpe@pharmacistevolve.com')
                    ->subject('New contact enquiry: '.$typeLabel)
                    ->replyTo($data['email'], $data['name'])
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });

            return back()->with('success', 'Thank you for your message. We will reply within 5 working days.');

        } catch (\Exception $e) {
            \Log::error('Contact form email failed: '.$e->getMessage());

            return back()->with('error', 'There was an issue sending your message. Please try again, or email us directly at support@pharmacistevolve.com');
        }
    }
}
