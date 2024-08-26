@extends('admin.layout.main')
@section('title') {{'Edit Client'}} @endsection
@section('main-container')
    
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Client Review</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Client</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
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
                         {!! Form::model($edit, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\ClientController@update', $edit->id], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                    
                        <div class="card-body">
                            <h4 class="card-title">Client</h4>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Client Name</label>
                                <div class="col-sm-9">
                                    {!! Form::text('name', null, ['id'=>'name','class'=>'form-control']) !!}
                                    @error('name')
                                            <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Client Position</label>
                                <div class="col-sm-9">
                                    {!! Form::text('position', null, ['id'=>'position','class'=>'form-control']) !!}
                                    @error('position')
                                            <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Rating</label>
                                <div class="col-sm-9">
                                    <select name="rating" id="rating" class="form-control">
                                        <option value="5" {{$edit->rating==5 ? 'selected':''}}>5</option>
                                        <option value="4" {{$edit->rating==4 ? 'selected':''}}>4</option>
                                        <option value="3" {{$edit->rating==3 ? 'selected':''}}>3</option>
                                        <option value="2" {{$edit->rating==2 ? 'selected':''}}>2</option>
                                        <option value="1" {{$edit->rating==1 ? 'selected':''}}>1</option>
                                    </select>
                                    @error('rating')
                                    <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    {!! Form::textarea('description', null, ['id'=>'description','class'=>'form-control']) !!}
                                    @error('description')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                <div class="col-sm-9">
                                    {!! Form::file('image', null, ['id'=>'image','class'=>'form-control']) !!}
                                    @error('image')
                                            <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Assembly Mounting Tv</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="assembly_mounting_tv">
                                        <option value="0" {{ $edit->assembly_mounting_tv == 0 ? 'selected' : '' }}>Furniture Assembly</option>
                                        <option value="1" {{ $edit->assembly_mounting_tv == 1 ? 'selected' : '' }}>General Mounting</option>
                                        <option value="2" {{ $edit->assembly_mounting_tv == 2 ? 'selected' : '' }}>TV selection</option>
                                        @error('assembly_mounting_tv')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </select>
                                   
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
    </div>
 </div>
</div>
        @endsection  