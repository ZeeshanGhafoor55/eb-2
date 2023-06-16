@extends('layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Create Cards</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Create Cards</h6>
                </div>
                <div class="col-6">
                    <h6 style="text-align:right"><a href="{{'/dashboard/homecard'}}" class="btn btn-primary btn-back">Back to Cards</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{url('/dashboard/homecard/create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group" >
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control"  placeholder="Title">
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="desc" rows="2" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group" >
                            <label for="">Image</label>
                            <input type="text" name="img" class="form-control"  placeholder="Image">
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group" >
                            <label for="">Alt</label>
                            <input type="text" name="alt" class="form-control"  placeholder="Alt Text">
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group" >
                            <label for="">Order</label>
                            <input type="text" name="order" class="form-control"  placeholder="order">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto" style="margin-left:300px">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection