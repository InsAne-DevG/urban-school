@extends('school.layout.app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <!-- Start:: row-6 -->
    <div class="row mt-2">
        <div class="col-xl-12">
            <div class="card custom-card" id="pill">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Add Subjects
                    </div>
                </div>
                
             
                <div class="card-body">
                    <form action="{{ route('school-subject-create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label required-label">Subjects<span class="text-danger">*</span></label>
                                    <select class="js-example-basic-multiple" name="subject_ids[]" multiple="multiple" placeholder="Select Subjects">
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ ucfirst($subject->name) }}</option>
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

@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection