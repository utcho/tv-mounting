@extends('admin.layout.main')
@section('title') {{'Profile'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Profile</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    @if (Session::has('flash_message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                        style="margin-right: 4%;">&times;</a>
                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                </div>
            @endif
                    {!! Form::open([
                        'route' => 'admin.profile.update',
                        'method' => 'POST',
                        'class' => 'form-horizontal',
                        'files' => 'true',
                        'enctype' => 'multipart/form-data',
                    ]) !!}
                    
                        <div class="card-body">
                            <h4 class="card-title">Profile Detail</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" id="name"  value="{{$profile->name}}" class ="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" id="email" value="{{$profile->email}}" class ="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" id="password" class ="form-control">
                                     <p>if this input remain emtpy password will not change</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 text-right control-label col-form-label">Profile Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" id="image"  class ="form-control">
                                </div>
                            </div>
                            
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>   
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    {{-- <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer> --}}
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    
 </div>
</div>
 @endsection  