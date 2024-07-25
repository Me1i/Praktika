<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home'; // You can leave this as a fallback

    /**
     * Handle post-login redirection based on user role.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated()
    {
        if (Auth::user()->role_as == '1') { // 1 = admin
            return redirect('/admin/dashboard')->with('status', 'Welcome to Admin Dashboard');
        } elseif (Auth::user()->role_as == '0') { // 0 = user
            return redirect('/')->with('status', 'Logged In Successfully');
        } else {
            return redirect('/');
        }
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
