<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    /**
     * Display the form for changing the admin's password.
     *
     * @return \Illuminate\View\View
     */
    public function showChangePasswordForm()
    {

        return view('blog.admin.passwords.change');
    }

    /**
     * Handle the change password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Get the currently authenticated user
        $admin = Auth::user();

        // Check if the current password matches
        if (!Hash::check($request->current_password, $admin->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The provided password does not match your current password.'],
            ]);
        }

        // Update the password
        $admin->update(['password' => Hash::make($request->new_password)]);

        // Redirect the admin to a success page
        return redirect()->route('dashboard')->with('success', 'Password changed successfully!');
    }
}
