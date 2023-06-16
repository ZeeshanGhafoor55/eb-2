@extends('layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Cards</h1>

    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
<!-- DataTales Example -->
    <form action="{{url('/dashboard/homecard/update/'.$cards->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <!-- @method('PUT') -->
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Green Cards Edit</h6>
                    </div>
                    <div class="col-6">
                        <h6 style="text-align:right"><a href="{{'/dashboard/homecard'}}" class="btn btn-primary btn-back">Back to Card</a></h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control"  placeholder="Title" value="{{$cards->title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="desc" rows="1" class="form-control">{{$cards->desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Image</label>
                                    <input type="text" name="img" class="form-control"  placeholder="Image" value="{{$cards->img}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Alt</label>
                                    <input type="text" name="alt" class="form-control"  placeholder="Alt" value="{{$cards->alt}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Order</label>
                                    <input type="text" name="order" class="form-control"  placeholder="Order" value="{{$cards->order}}">
                                </div>
                            </div>
                        </div>
                    </div> 
                        <button type="submit" class="btn btn-primary">Update</button>  
                </div>
            </div>
        </div>

    </form>
</div>
<!-- /.container-fluid -->

@endsection