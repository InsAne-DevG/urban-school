<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolAuthController extends Controller
{
    public function login(Request $request) {
        if($request->isMethod('get')) {
            return view('school.auth.login');
        } 

        if($request->isMethod('post')) {
            if (Auth::guard('school')->attempt(['email' => $request->email,'password' => $request->password])) 
            {
                // Check if admin status is '0'
                if (Auth::guard('school')->user()->status == '0') {
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

    public function logout(Request $request) {
        Auth::guard('school')->logout();
        return redirect()->route('school-login');
    }

    public function forgotPassword(Request $request) {

    }

    public function resetPassword(Request $request) {

    }

}
