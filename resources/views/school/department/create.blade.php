@extends('school.layout.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-xl-5">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Overview
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('school-department-create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-medium">Department Name</label>
                            <input type="text" class="form-control" name="department_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
