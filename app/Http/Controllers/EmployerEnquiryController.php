<?php

namespace App\Http\Controllers;

use App\Models\EmployerEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmployerEnquiryController extends Controller
{
    /**
     * Store an employer enquiry for the Integration Partnership.
     *
     * Saved to the database first so an enquiry is never lost; the
     * notification email is best-effort and a mail failure must not surface
     * as an error to the visitor.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'contact_name' => 'required|string|max:255',
            'work_email' => 'required|email|max:255',
            'organisation' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'number_of_pharmacists' => 'required|string|max:255',
            'expected_start_month' => 'nullable|string|max:255',
            'support_need' => 'required|string|max:2000',
            'phone' => 'nullable|string|max:255',
        ]);

        $validated['status'] = 'new';

        $enquiry = EmployerEnquiry::create($validated);

        $this->notify($enquiry);

        return redirect()->back()->with(
            'success',
            'Thank you for your enquiry. Our team will contact you within five working days '
            .'to discuss your needs and programme suitability. Submitting this form does not '
            .'reserve capacity or create a purchase commitment.'
        );
    }

    private function notify(EmployerEnquiry $enquiry): void
    {
        try {
            $body = "NEW EMPLOYER PILOT ENQUIRY\n";
            $body .= str_repeat('=', 40)."\n\n";
            $body .= "Contact: {$enquiry->contact_name}\n";
            $body .= "Work email: {$enquiry->work_email}\n";
            $body .= "Organisation: {$enquiry->organisation}\n";
            $body .= "Role: {$enquiry->role}\n";
            $body .= "Number of pharmacists: {$enquiry->number_of_pharmacists}\n";
            if (! empty($enquiry->expected_start_month)) {
                $body .= "Expected start: {$enquiry->expected_start_month}\n";
            }
            if (! empty($enquiry->phone)) {
                $body .= "Phone: {$enquiry->phone}\n";
            }
            $body .= "Main support need:\n{$enquiry->support_need}\n";
            $body .= "\nSubmitted: ".now()->format('F j, Y \a\t g:i A T')."\n";
            $body .= "Via the For Employers page pilot enquiry form.";

            Mail::raw($body, function ($mail) use ($enquiry) {
                $mail->to('support@pharmacistevolve.com')
                    ->cc('faithadebimpe@pharmacistevolve.com')
                    ->subject('New employer pilot enquiry: '.$enquiry->organisation)
                    ->replyTo($enquiry->work_email, $enquiry->contact_name)
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });
        } catch (\Throwable $e) {
            Log::error('Employer enquiry notification failed: '.$e->getMessage());
        }
    }
}
