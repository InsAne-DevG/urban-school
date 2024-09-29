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
                    <form action="{{ route('school-role-create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-medium">Role Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Please enter the name of the role you wish to create for your school. Make sure the role is unique and not already assigned within your school. Common roles include 'Teacher', 'Accountant', 'HR', etc.</div>
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
