@extends('layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Website Setting</h1>

    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
<!-- DataTales Example -->
    <form action="{{url('/dashboard/footer/update')}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Header</h6>
                    </div>
                    <!-- <div class="col-6">
                        <h6 style="text-align:right"><a href="{{'/dashboard/menu'}}" class="btn btn-primary btn-back">Back menu link</a></h6>
                    </div> -->
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Header Logo</label>
                                    <input type="text" name="logo_img" class="form-control"  placeholder="Logo Image" value="{{$footer->logo_img}}">
                                </div>
                            </div>
                        </div>
                    </div> 
                        <!-- <button type="submit" class="btn btn-primary">Create</button> -->  
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Footer column 1</h6>
                    </div>
                    <!-- <div class="col-6">
                        <h6 style="text-align:right"><a href="{{'/dashboard/menu'}}" class="btn btn-primary btn-back">Back menu link</a></h6>
                    </div> -->
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Title</label>
                                    <input type="text" name="footer_col1_title" class="form-control"  placeholder="Title" value="{{$footer->footer_col1_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="footer_col1_desc" rows="1" class="form-control">{{$footer->footer_col1_desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                    </div> 
                        <!-- <button type="submit" class="btn btn-primary">Create</button> -->  
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Footer column 2</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                        <div class="form-group" >
                            <label for="">Title</label>
                            <input type="text" name="footer_col2_title" class="form-control"  placeholder="Name" value="{{$footer->footer_col2_title}}">
                        </div>
                    </div>
                    <div class="panel-collapse in mb-3" id="pictureTarifa" style="background-color:#dbd1d1; padding:15px"!important;>
                        <label>Footer Links</label>
                        <textarea name="footer_col2_link" id="" rows="4" class="form-control">{{$footer->footer_col2_link}}</textarea>
                    </div>      
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Footer column 3</h6>
                    </div>
                    <!-- <div class="col-6">
                        <h6 style="text-align:right"><a href="{{'/dashboard/menu'}}" class="btn btn-primary btn-back">Back menu link</a></h6>
                    </div> -->
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                            <div class="form-group" >
                                <label for="">Title</label>
                                <input type="text" name="footer_col3_title" class="form-control"  placeholder="Name" value="{{$footer->footer_col3_title}}">
                            </div>
                        </div>
                        <div class="panel-collapse in mb-3" id="pictureTarifa" style="background-color:#dbd1d1; padding:15px"!important;>
                            <label>Footer Links</label>
                            <textarea name="footer_col3_link" id="" rows="4" class="form-control">{{$footer->footer_col3_link}}</textarea>
                        </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Footer column 4</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Title</label>
                                    <input type="text" name="footer_col4_title" class="form-control"  placeholder="Name" value="{{$footer->footer_col4_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Social Title</label>
                                    <input type="text" name="footer_col4_socialtitle" class="form-control"  placeholder="Name" value="{{$footer->footer_col4_socialtitle}}">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-collapse in mb-3" id="pictureTarifa" style="background-color:#dbd1d1; padding:15px"!important;>
                            <label>Footer Links</label>
                            <textarea name="footer_col4_sociallink" id="" rows="4" class="form-control">{{$footer->footer_col4_sociallink}}</textarea>
                        </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Copyright</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                        <div class="form-group" >
                            <label for="">Copyright</label>
                            <input type="text" name="copyright" class="form-control"  placeholder="Name" value="{{$footer->copyright}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="py-3">
                <div class="row">
                <!-- <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button> -->
                <button type="submit" class="btn btn-primary btn-lg mx-auto">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

@endsection