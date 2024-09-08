<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class SchoolController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            if (auth()->guard('school')->check()) {
                return redirect()->route('school-dashboard');
            }
            return view('school.auth.login');
        } else {
           
            if (Auth::guard('school')->attempt([
                    ['password' => $request->password],
                    function ($query) use ($request) {
                        $query->where('email', $request->email)
                            ->orWhere('phone', $request->email);
                    }
                ])) 
            {
                $admin = Auth::guard('school')->user();
    
                // Check if admin status is '0'
                if ($school->status == '0') {
                    Auth::guard('school')->logout();
                    session()->flash('toast_message', 'Your account is inactive. Please contact school administrator.');
                    return redirect()->route('school-login');
                }
                session()->flash('toast_message', 'Your account login successfully.');
                return redirect()->route('school-dashboard');
            } else {
                session()->flash('toast_message', 'Please enter valid credentials.');
                return back();
            }
        }
    }

    //Logout Admin 
    public function logout(){
        Auth::guard('school')->logout();
        return redirect()->route('school-login');
    }
}
