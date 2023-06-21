@extends('layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Create Media</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Create Media</h6>
                </div>
                <div class="col-6">
                    <h6 style="text-align:right"><a href="{{'/dashboard/media'}}" class="btn btn-primary btn-back">Back to Media</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{url('/dashboard/media/create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group" >
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Name" value="{{old('name')}}">
                            <!-- @error('file')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror -->
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group">
                            <label for="">Detail</label>
                            <textarea name="detail" rows="5" class="form-control"  placeholder="Detail">{{old('detail')}}</textarea>
                            <!-- @error('img_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror -->
                        </div>
                    </div>

                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group" >
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control"  placeholder="Image" value="{{old('image')}}">
                            <!-- @error('file')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror -->
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