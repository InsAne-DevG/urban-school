<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\GradeLevel;
use App\Models\GradeSection;
use App\Models\SchoolGrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SchoolGradeLevelController extends Controller
{
    public function index() {
        dd('Coming Soon');
    }

    public function create(Request $request) {
        if($request->isMethod('get')){
            $gradeLevels = GradeLevel::orderBy('id')->get();
            $gradeSections = GradeSection::orderBy('id')->get();
            return view('school.grade-level.create', compact('gradeLevels', 'gradeSections'));
        }
        
        if($request->isMethod('post')){
            $validator = Validator::make($request->only('grade_level_id', 'grade_section_id'),[
                'grade_level_id' => 'required',
                'grade_section_id' => 'required'
            ]);

            if($validator->fails()){
                session()->flash('toast_message', 'All fields are required');
                return back();
            }

            if(SchoolGrade::where('school_id', Auth::guard('school')->user()->id)->where('grade_level_id', $request->grade_level_id)->where('grade_section_id', $request->grade_section_id)->exists()){
                session()->flash('toast_message', 'This grade is already exists');
                return back();
            }

            SchoolGrade::create([
                'school_id' => Auth::guard('school')->user()->id,
                'grade_level_id' => $request->grade_level_id,
                'grade_section_id' => $request->grade_section_id
            ]);

            session()->flash('toast_message', 'Grade Level created successfully');
            return back();
        }
    }

    public function createBulk(Request $request) {
        if($request->isMethod('get')){
            $gradeLevels = GradeLevel::orderBy('id')->get();
            $gradeSections = GradeSection::orderBy('id')->get();
            return view('school.grade-level.create-bulk', compact('gradeLevels', 'gradeSections'));
        }
        
        if($request->isMethod('post')){
            $validator = Validator::make($request->only('grade_level_id', 'grade_section_id'),[
                'grade_level_ids' => 'required',
                'grade_section_ids' => 'required'
            ]);

            if($validator->fails()){
                session()->flash('toast_message', 'Something went wrong. Please try again');
                return back();
            }

            foreach($request->grade_level_ids as $grade_level_id){
                foreach($request->grade_section_ids as $grade_section_id){
                    $exists = SchoolGrade::where('school_id', Auth::guard('school')->user()->id)->where('grade_level_id', $grade_level_id)->where('grade_section_id', $grade_section_id)->exists();
                    if(!$exists){
                        SchoolGrade::create([
                            'school_id' => Auth::guard('school')->user()->id,
                            'grade_level_id' => $grade_level_id,
                            'grade_section_id' => $grade_section_id
                        ]);
                    }
                }
            }

            session()->flash('toast_message', 'Grade Level created successfully');
            return back();
        }
    }

    public function list() {
        $schoolGradeLevels = SchoolGrade::with('gradeLevel', 'gradeSection')
                                        ->where('school_id', Auth::guard('school')->user()->id)
                                        ->paginate(15);
        return view('school.grade-level.list', compact('schoolGradeLevels'));
    }
}
