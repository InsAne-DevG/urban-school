@extends('school.layout.app')
@section('css')
    
@endsection
@section('content')
<div class="container-fluid">

    <!-- Start::page-header -->

    <div class="d-md-flex d-block align-items-center justify-content-between my-4">
        <div>
            <h5 class="main-content-title text-default  fs-24  mg-b-4 mb-0">Welcome To Dashboard</h5>
            <ol class="breadcrumb mb-sm-0 mb-4">
                <li class="breadcrumb-item"><a href="javascript:void(0);" class="fs-14">Home</a></li>
                <li class="breadcrumb-item active fs-14" aria-current="page">Analytics Dashboard</li>
            </ol>
        </div>
        <div class="d-flex app-header-btn">
            <div class="me-2">
                <a class="btn ripple btn-primary btn-wave mb-0" href="javascript:void(0);" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    <i class="fe fe-external-link"></i> Export <i class="fa fa-caret-down ms-1 fs-10"></i>
                </a>
                <div class="dropdown-menu tx-13">
                    <a class="dropdown-item" href="javascript:void(0);"><i
                            class="fa-regular fa-file-pdf me-2"></i>Export as
                        Pdf</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i
                            class="fa-regular fa-image me-2"></i>Export as
                        Image</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i
                            class="fa-regular fa-file-excel me-2"></i>Export as
                        Excel</a>
                </div>
            </div>
            <div>
                <a href="javascript:void(0);" class="btn ripple btn-wave  btn-secondary navresponsive-toggler mb-0"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fe fe-filter me-1"></i> Filter <i class="fa fa-caret-down ms-1 fs-10"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- End::page-header -->

    <!--Navbar-->
    <div class="responsive-background">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="advanced-search br-3">
                <div class="row align-items-center">
                    <div class="col-md-12 col-xl-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-lg-0">
                                    <label>From :</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fe fe-calendar lh--9 op-6"></i>
                                        </div>   <input type="text" class="form-control" id="date1" placeholder="11/01/2019">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-lg-0">
                                    <label>To :</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fe fe-calendar lh--9 op-6"></i>
                                        </div><input type="text" class="form-control" id="date2" placeholder="11/01/2019">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="form-group mb-lg-0">
                            <label>Sales By Country :</label>
                        
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-xl-2">
                        <div class="form-group mb-lg-0">
                            <label>Sales Type :</label>
                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                <option value="1">Online</option>
                                <option value="2">Offline</option>
                                <option value="3">Reseller</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-end">
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">Apply</a>
                    <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Navbar -->
</div>
@endsection
@section('script')

@endsection
