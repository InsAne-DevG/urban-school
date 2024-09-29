@extends('school.layout.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-xl-6">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Grade Level List
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">Grade Level</th>
                                    <th scope="col">Grade Section</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schoolGradeLevels as $schoolGradeLevel)
                                    <tr>
                                        <td>{{ $schoolGradeLevel->gradeLevel->grade_level_name }}</td>
                                        <td>{{ $schoolGradeLevel->gradeSection->grade_section_name }}</td>
                                        <td>
                                            {{-- <a href="{{ route('school-role-edit',['role'=>$role->id]) }}" class="btn btn-sm btn-info">Edit</a> --}}
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
                        {{ $schoolGradeLevels->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection