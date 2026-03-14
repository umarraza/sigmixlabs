<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'phone'   => ['nullable', 'string', 'max:50'],
            'email'   => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        // Rename 'message' to 'body' — Laravel reserves $message in mail views
        $data = array_merge($validated, ['body' => $validated['message']]);
        unset($data['message']);

        Mail::send('emails.contact-form', $data, function ($mail) use ($validated) {
            $mail->to('umarraza2200@gmail.com')
                 ->replyTo($validated['email'], $validated['name'])
                 ->subject('New Enquiry: ' . $validated['subject']);
        });

        return redirect('/#contact')->with('contact_success', true);
    }
}
