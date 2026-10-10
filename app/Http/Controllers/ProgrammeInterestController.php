<?php

namespace App\Http\Controllers;

use App\Models\ProgrammeInterest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ProgrammeInterestController extends Controller
{
    /**
     * Store a Register Interest submission for the Transition Programme.
     *
     * The record is always saved to the database first so an enquiry is never
     * lost; the notification email is best-effort and a mail failure must not
     * surface as an error to the visitor.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'career_stage' => 'required|string|max:255',
            'support_need' => 'nullable|string|max:2000',
        ]);

        $validated['status'] = 'new';

        $interest = ProgrammeInterest::create($validated);

        $this->notify($interest);

        return redirect()->back()->with(
            'success',
            'Thank you for your interest in the Pharmacist Evolve Transition Programme. '
            .'This does not reserve a place or commit you to payment. We will email you '
            .'when programme dates and applications are confirmed.'
        );
    }

    private function notify(ProgrammeInterest $interest): void
    {
        try {
            $body = "NEW TRANSITION PROGRAMME INTEREST\n";
            $body .= str_repeat('=', 40)."\n\n";
            $body .= "Name: {$interest->first_name}\n";
            $body .= "Email: {$interest->email}\n";
            $body .= "Career stage: {$interest->career_stage}\n";
            if (! empty($interest->support_need)) {
                $body .= "Main support need:\n{$interest->support_need}\n";
            }
            $body .= "\nSubmitted: ".now()->format('F j, Y \a\t g:i A T')."\n";
            $body .= "Via the For Pharmacists page Register Interest form.";

            Mail::raw($body, function ($mail) use ($interest) {
                $mail->to('support@pharmacistevolve.com')
                    ->cc('faithadebimpe@pharmacistevolve.com')
                    ->subject('New Transition Programme interest: '.$interest->first_name)
                    ->replyTo($interest->email, $interest->first_name)
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });
        } catch (\Throwable $e) {
            Log::error('Programme interest notification failed: '.$e->getMessage());
        }
    }
}
