<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SchoolDepartmentController extends Controller
{
    public function index() {
        dd('Coming soon');
    }

    public function create(Request $request) {
        if($request->isMethod('get')){
            return view('school.department.create');
        }
        if($request->isMethod('post')){
            $validator = Validator::make($request->only('department_name'),[
                'department_name' => 'required'
            ]);

            if($validator->fails()){
                session()->flash('toast_message', $validator->errors()->first());
                return back();
            }

            if(Department::where('department_name', $request->department_name)->where('school_id', Auth::guard('school')->user()->id)->exists()){
                session()->flash('toast_message', 'This Department is already exists');
                return back();
            }

            Department::create([
                'department_name' => ucwords(strtolower($request->department_name)),
                'school_id' => Auth::guard('school')->user()->id
            ]);

            session()->flash('toast_message', 'Department created successfully');
            return back();
        }
    }

    public function list() {
        $departments = Department::where('school_id', Auth::guard('school')->user()->id)->orderBy('department_name')->paginate(10);
        return view('school.department.list', compact('departments'));
    }
}
