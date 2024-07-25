<?php
// app/Http/Controllers/NewsletterController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber; // Make sure this line is present and correct

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
            'name' => 'required|string|max:255',
        ]);

        Subscriber::create([
            'email' => $request->email,
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Subscription successful!');
    }
}
