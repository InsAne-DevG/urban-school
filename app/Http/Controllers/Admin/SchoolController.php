<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Str;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Helper\Helper;
use App\Models\State;
use App\Models\ProfileUser;

class SchoolController extends Controller
{
    public function list(Request $request){
        $query = User::query();
   
        if ($request->filled('search')) {
            $search = $request->search;
            
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('id', 'like', "%$search%")
                   ->orWhere('phone', 'like', "%$search%")
                  ->orWhere('status', 'like', "%$search%");
                });
        }
        $school = $query->latest()->paginate(10)->appends(request()->query());
        
        return view('admin.school.list', compact('school'));
    }


    public function create(Request $request){
        $states = State::select('name','id')->get();
        if($request->isMethod('post')){

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email', // Ensuring unique email for school
                'password' => 'required|min:8',
                'phone' => 'required|digits:10|unique:users,phone', // Ensuring unique phone number for school
                'address' => 'required|string|max:255',
                'state' => 'required|integer',
                'city' => 'required|integer',
            ]);
            
            if ($validator->fails()) {
                session()->flash('toast_message', $validator->errors()->first());
                return back()->withInput();
            }
            
            // Hash the password before saving
            $password = Hash::make($request->password);
            
            // Create the new school user
            $school = User::create([
                'id' => (string) Str::uuid(),
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
                'phone' => $request->phone,
                'role_id' => '1', // Assigning a role if applicable
            ]);
            
            if($school){
                ProfileUser::create([
                    'id' => (string) Str::uuid(),
                    'address' => $request->address,
                    'state_id' => $request->state, // Assuming you have a relationship with state
                    'city_id' => $request->city,   // Assuming you have a relationship with city
                    'user_id' => $school->id
                ]);
            }
            session()->flash('toast_message', 'School created successfully!');
            
            return redirect()->route('admin-school-list');
            
        }
        return view('admin.school.create',compact('states'));
    }
}
