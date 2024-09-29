<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsSchoolAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::guard('school')->user() && Auth::guard('school')->user()->hasRole('school_admin')){
            return $next($request);
        } else {
            session()->flash('toast_message', 'You do not have permission to access this page.');
            return redirect(route('school-login'));
        }
    }
}
