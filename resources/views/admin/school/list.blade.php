
@extends('admin.layout.app')
@section('css')

@endsection
@section('content')

<div class="container-fluid">
    <!-- Start:: row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="d-flex mb-4 mt-2 justify-content-end">
                <a href="{{ route('admin-school-create') }}" class="btn btn-primary">Add School</a>
            </div>
            <div class="card custom-card">
                <div class="mt-3 mx-3">
                    <div class="row">
                        <div class="col-lg-3 mb-3 mb-lg-0">
                            <div class="card-title">
                              List School
                            </div>
                        </div>
                        <div class="col-lg-9 mb-3 mb-lg-0 d-flex" style="justify-content:right">
                            @if(auth()->guard('admin')->user()->is_downloadable == '1')
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Export
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a href="{{ route('admin-school-export',['type'=> 'excel', 'search' => request()->search, 'city' => request()->city])}}" id="export-excel" class="dropdown-item">Excel</a></li>
                                        <li><a href="{{ route('admin-school-export',['type'=> 'csv', 'search' => request()->search, 'city' => request()->city])}}" id="export-csv" class="dropdown-item">Csv</a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                           <form action="{{ route('admin-school-list') }}" method="GET">
                               <input type="hidden" name="city" value="{{ request()->city }}">
                                <div class="input-group input-group-merge input-group-flush">
                                    <input type="search" value="{{ request()->search }}" name="search" class="form-control" placeholder="Serach here" aria-label="{{ __('messages.search') }}">
                                    <button type="submit" class="btn mx-2 btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Sr</th>
                                    <th scope="col">Unique Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($school as $e)
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                           #{{ $loop->iteration }}
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            {{ $e->id }}
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                             <a href="{{ route('admin-school-show',['id'=> $e->id]) }}" class="text-info fs-14 lh-1">{{ $e->name }}</a>
                                        </div>
                                    </th>
                                     <th scope="row">
                                        <div class="d-flex align-items-center">
                                             <a href="{{ route('admin-school-show',['id'=> $e->id]) }}" class="text-info fs-14 lh-1">{{ $e->email }}</a>
                                        </div>
                                    </th>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            {{ $e->phone }}
                                        </div>
                                    </th>
                                   

                                    <td><div class="form-check form-switch">
                                          <input data-id="{{ $e->id }}" class="form-check-input is_active" type="checkbox" role="switch" id="flexSwitchCheckChecked" {{ $e->status == '1' ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 flex-wrap">
                                            <a href="{{ route('admin-school-show',['district'=> $e->id]) }}" class="text-info fs-14 lh-1"><i
                                                    class="fa fa-eye"></i></a>
                                            @if(auth()->guard('admin')->user()->is_edited == '1')
                                            <a href="{{ route('admin-school-edit',['id'=> $e->id]) }}" class="text-info fs-14 lh-1"><i
                                                    class="ri-edit-line"></i></a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                         <div class="m-2">
                            {{ $school->appends(request()->query())->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-1 -->
</div>
@endsection
@section('script')
<script>
    $("#myTable").on("click", ".is_active", (e) => {
          id = e.target.dataset.id;

          $.ajax({
            type: "post",
            url : "{{route('admin-school-status')}}",
            data : {
              id : id,
              "_token" : '{{csrf_token()}}'
            },
            success : (res) => {
              console.log(res);
              if(res.status == 0){
                !e.target.checked;
              } else{
                e.target.checked;
              }
            }
          })
        });
  </script>
@endsection
