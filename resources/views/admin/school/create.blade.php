

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
                                <label class="form-label required-label">School Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="School Name" value="{{ old('name') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">School Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="School Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">School Phone<span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control phone" max="10" maxlength="10" id="phone" placeholder="School Phone" value="{{ old('phone') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">School Address<span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control locationInput" placeholder="School Address" value="{{ old('address') }}" required>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label required-label">State<span class="text-danger">*</span></label>
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
                                    <label class="form-label">City<span class="text-danger">*</span></label>
                                    <select class="form-control js-example-basic-single" name="city" required style="width: 100%;" id="city">
                                        <option value="">Select city</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label required-label">School Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control locationInput" id="imageInput" accept="image/*" required>
                            </div>
                            
                            <div class="col-md-12 mb-3 preview">
                                <img id="image-preview" src="" alt="Image Preview" style="display: none;"/>
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
document.getElementById('imageInput').addEventListener('change', function() {
    var imagePreview = document.getElementById('image-preview');
    var file = this.files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        }

        reader.readAsDataURL(file);
    } else {
        imagePreview.src = '';
        imagePreview.style.display = '';
    }
});

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
@endsection

