<?php

namespace App\Http\Controllers;

use App\Mail\InfinitechMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitinquiry(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Extract the validated data
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $phone = $validatedData['phone'] ?? 'N/A';
        $message = $validatedData['message'];

        // Prepare email data
        $to = "infinitechcorp.ph@gmail.com";  // Your receiving email address
        $subject = "Inquiry from $name";  // Email subject
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";  // Email body

        // Send the email
        Mail::raw($body, function($message) use ($email, $to, $subject) {
            $message->from($email)  
                    ->to($to) 
                    ->subject($subject);
        });

        return response(['msg' => "Message sent successfully!"]);
    }


}
