@extends('school.layout.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-xl-6">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Roles List
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                    <tr>
                                        <td>{{ $department->department_name }}</td>
                                        <td>
                                            <a href="{{ route('school-department-edit',['department'=>$department->id]) }}" class="btn btn-sm btn-info">Edit</a>
                                            <button class="btn btn-sm btn-danger btn-wave waves-effect waves-light">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $departments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection