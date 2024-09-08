

@extends('admin.layout.app')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
    <!-- Start:: row-6 -->
    <div class="row mt-2">
        <div class="col-xl-12">
            <div class="card custom-card" id="pill">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Add School
                    </div>
                </div>
             
                <div class="card-body">
                    <form action="{{ route('admin-school-create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">School Name</label>
                                <input type="text" name="name" class="form-control" placeholder="School Name" value="{{ old('name') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">School Email</label>
                                <input type="email" name="email" class="form-control" placeholder="School Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">School Phone</label>
                                <input type="tel" name="phone" class="form-control phone" max="10" maxlength="10" id="phone" placeholder="School Phone" value="{{ old('phone') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">School Address</label>
                                <input type="text" name="address" class="form-control locationInput" placeholder="School Address" value="{{ old('address') }}" required>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label required-label">State</label>
                                    <select class="form-control js-example-basic-single" name="state" required style="width: 100%;" onChange="getCity()" id="state">
                                        <option value="">Select state</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}" {{ old('state') == $state->id ? 'selected' : '' }}>{{ ucwords($state->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <select class="form-control js-example-basic-single" name="city" required style="width: 100%;" id="city">
                                        <option value="">Select city</option>
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
<script>
function getCity(){
    let e = document.getElementById('state').value;
    $.ajax({
        url: "{{ route('admin-get-city', '') }}"+"/"+e,
        method: 'GET',
        data: {
            'id': e,
            '_token': "{{ csrf_token() }}",
        },
        success: function(res) {
            console.log(res);
             document.getElementById('city').innerHTML = res;
          
        },
        error: function(err) {
        }
    });
}
</script>

