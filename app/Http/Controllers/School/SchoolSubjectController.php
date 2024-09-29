<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\SchoolSubject;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SchoolSubjectController extends Controller
{
    public function index() {
        dd('Coming Soon');
    }

    public function create(Request $request) {
        if($request->isMethod('get')){
            $subjects = Subject::get();
            return view('school.subject.create', compact('subjects'));
        }
        
        if($request->isMethod('post')){
            $validator = Validator::make($request->only('subject_ids'),[
                'subject_ids' => 'required|array|min:1',
                'subject_ids.*' => 'exists:subjects,id'
            ]);

            if($validator->fails()){
                session()->flash('toast_message', $validator->errors()->first());
                return back();
            }

            foreach($request->subject_ids as $subject_id){
                if(!SchoolSubject::where('school_id', Auth::guard('school')->user()->id)->where('subject_id', $subject_id)->exists()){
                    SchoolSubject::create([
                        'school_id' => Auth::guard('school')->user()->id,
                        'subject_id' => $subject_id
                    ]);
                }
            }

            session()->flash('toast_message', 'Subjects created successfully');
            return back();
        }
    }

    public function list() {
        $schoolSubjects = SchoolSubject::with('subject')
                                        ->where('school_id', Auth::guard('school')->user()->id)
                                        ->paginate(15);
        return view('school.subject.list', compact('schoolSubjects'));
    }
}
