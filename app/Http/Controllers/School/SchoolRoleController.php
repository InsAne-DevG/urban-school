<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SchoolRoleController extends Controller
{
    public function index() {
        dd('Coming Soon');
    }

    public function create(Request $request) {
        if($request->isMethod('get')){
            return view('school.role.create');
        }

        if($request->isMethod('post')){
            $validator = Validator::make($request->only('name'),[
                'name' => 'required'
            ]);

            if($validator->fails()){
                session()->flash('toast_message', 'Role name is required');
                return back();
            }

            if(UserRole::where('name', $request->name)->where('school_id', Auth::guard('school')->user()->id)->exists()){
                session()->flash('toast_message', 'This role is already exists');
                return back();
            }

            UserRole::create([
                'name' => strtolower($request->name),
                'school_id' => Auth::guard('school')->user()->id
            ]);

            session()->flash('toast_message', 'Role created successfully');
            return back();
        }
    }

    public function edit(Request $request, UserRole $role) {
        if($request->isMethod('get')){
            return view('school.role.edit', compact('role'));
        }

        if($request->isMethod('patch')){
            $validator = Validator::make($request->only('name'),[
                'name' => 'required'
            ]);

            if($validator->fails()){
                session()->flash('toast_message', 'Role name is required');
                return back();
            }

            if(UserRole::where('name', $request->name)->where('school_id', Auth::guard('school')->user()->id)->exists()){
                session()->flash('toast_message', 'This role is already exists');
                return back();
            }

            $role->update([
                'name' => $request->name
            ]);

            session()->flash('toast_message', 'Role updated successfully');
            return back();
        }
    }

    public function list() {
        $roles = UserRole::where('school_id', Auth::guard('school')->user()->id)->orderBy('name')->paginate(10);
        return view('school.role.list', compact('roles'));
    }
}
