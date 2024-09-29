@extends('school.layout.app')

@section('content')
<div class="container-fluid">
    <!-- Start:: row-6 -->
    <div class="row mt-2">
        <div class="text-end mb-3">
            <a href="{{ route('school-gradelevel-createbulk') }}" class="btn btn-primary">Add grade levels in bulk</a>
        </div>
        <div class="col-xl-12">
            <div class="card custom-card" id="pill">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Add Grade Level
                    </div>
                </div>
                
             
                <div class="card-body">
                    <form action="{{ route('school-gradelevel-create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label required-label">Grade Levels<span class="text-danger">*</span></label>
                                    <select class="form-control js-example-basic-single" name="grade_level_id" required style="width: 100%;">
                                        <option value="">Select grade level</option>
                                        @foreach ($gradeLevels as $gradeLevel)
                                            <option value="{{ $gradeLevel->id }}" {{ old('grade_level_id') == $gradeLevel->id ? 'selected' : '' }}>{{ ucwords($gradeLevel->grade_level_name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label required-label">Grade Sections<span class="text-danger">*</span></label>
                                    <select class="form-control js-example-basic-single" name="grade_section_id" required style="width: 100%;">
                                        <option value="">Select grade section</option>
                                        @foreach ($gradeSections as $gradeSection)
                                            <option value="{{ $gradeSection->id }}" {{ old('grade_section_id') == $gradeSection->id ? 'selected' : '' }}>{{ ucwords($gradeSection->grade_section_name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End:: row-6 -->
</div>
@endsection