<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('blog.contact');
    }

    public function send(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',    
        'email' => 'required|email|max:255',
        'message' => 'required|string', // Assuming 'message' is the renamed variable
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message, // Assuming 'message' is the renamed variable
    ];
    

    $recipientEmail = 'meloskabashi12@gmail.com';

    Mail::send('emails.contact', ['data' => $data], function ($message) use ($data, $recipientEmail) {
        $message->from($data['email'], $data['name'])
                ->to($recipientEmail)
                ->subject('Contact Form Submission');
    });

    return back()->with('success', 'Your message has been sent!');
}

}