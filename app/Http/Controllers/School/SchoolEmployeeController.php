<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\User;
use App\Models\UserHasRole;
use App\Models\UserRole;
use App\Traits\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SchoolEmployeeController extends Controller
{
    use Helper;

    public function index() {
        dd('Coming Soon');
    }

    public function create(Request $request) {
        if($request->isMethod('get')){
            $states = State::get();
            $roles = UserRole::where('school_id', Auth::guard('school')->user()->id)->get();
            return view('school.employee.create', compact('states', 'roles'));
        }

        if($request->isMethod('post')){
            return Helper::userRegistration($request);
        }
    }

    public function list() {
        $schoolId = Auth::guard('school')->user()->id;
        
        $employees =  UserHasRole::with(['user', 'role'])->whereHas('role', function ($q) {
            $q->where('school_id', Auth::guard('school')->user()->id);
        })->paginate(15);


        return view('school.employee.list', compact('employees'));
    }
}
