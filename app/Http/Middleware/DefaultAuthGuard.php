<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class DefaultAuthGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
      
        if (Auth::guard('admin')->check()) {
            // Get the authenticated user
            $user = Auth::guard('admin')->user();

            // Check if the user's status is '0'
            if ($user->status == '0') {
                // Log out the user
                Auth::guard('admin')->logout();

                session()->flash('toast_message', 'Your account is inactive. Please contact support.');
                return redirect()->route('admin-login');
            }
        }

        return $next($request);
    }
}
