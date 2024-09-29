@extends('school.layout.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-xl-6">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Employees List
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th>Role</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->user->name }}</td>
                                        <td>
                                            {{ ucwords($employee->role->name) }}
                                            {{-- @foreach ($employee as $role)
                                            @endforeach --}}
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('school-role-edit',['role'=>$employee->id]) }}" class="btn btn-sm btn-info">Edit</a> --}}
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
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection