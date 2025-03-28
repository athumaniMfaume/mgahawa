<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{


    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // dd($request->user()->usertype);


            // Check if user is admin and not already on the admin dashboard
    if($request->user()->usertype === "1"){
        return redirect()->intended(route('admin.home')); // Redirect to admin dashboard
    }

    // Check if user is normal and not already on the home page
    if ($request->user()->usertype === "0" ) {
        return redirect()->intended(route('user.dashboard')); // Redirect to user home page
    }

        
    // Default redirect if no conditions met (in case of any issue)
    return redirect()->intended(route('dashboard'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
