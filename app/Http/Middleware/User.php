<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
                    // Check if the user is authenticated and has a usertype of 1 (admin)
        if(Auth::user()->usertype === "0")
        {
            return $next($request);
            
        }
        
        
        return redirect('/');
    }
}
