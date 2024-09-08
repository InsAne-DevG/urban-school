<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\City;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            if (auth()->guard('admin')->check()) {
                return redirect()->route('admin-dashboard');
            }
            return view('admin.auth.login');
        } else {
           
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $admin = Auth::guard('admin')->user();
    
                // Check if admin status is '0'
                if ($admin->status == '0') {
                    Auth::guard('admin')->logout();
                    session()->flash('toast_message', 'Your account is inactive. Please contact support.');
                    return redirect()->route('admin-login');
                }
                session()->flash('toast_message', 'Your account login successfully.');
                return redirect()->route('admin-dashboard');
            } else {
                session()->flash('toast_message', 'Please enter valid credentials.');
                return back();
            }
        }
    }

    //Logout Admin 
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login');
    }


    public function index(){
        return view('admin.dashboard');
    }

    public function getCity($id){
        $cities = City::where('state_id', $id)->select('id','city')->get();
        $html = [];
        foreach($cities as $catg){
            
            $htm = '<option value='.$catg->id.'>'.$catg->city.'</option>';
            array_push($html ,$htm);
            
        }
        return response($html);
    }
   
}
