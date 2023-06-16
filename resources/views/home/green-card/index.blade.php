@extends('layouts.master')

@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">All Green Card</h1>
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">All Green Card</h6>
                </div>
                <div class="col-6">
                    <h6 style="text-align:right"><a href="{{'/dashboard/homecard/create'}}" class="btn btn-primary btn-back">Create Card</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- <form action="" method="POST" class="form-inline"> -->
                    <!-- <input type="hidden" name="_token" value="1D6p3wd2tXn8soPnSP3jsXsG43dsZ5qis74yqPT0">                
                    <input type="hidden" name="_method" value="DELETE">                
                    <div class="form-group">
                        <select name="checkbox_array" id="" class="form-control">
                            <option value="">Delete</option>
                        </select>
                    </div> -->
                    <!-- <div class="form-group px-2 py-3">
                        <input type="submit" name="delete_all" class="btn btn-primary">
                    </div> -->
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <!-- <th><input type="checkbox" id="options"></th> -->
                                <th>Id</th>
                                <th>Title</th>
                                <th style="width:450px">Description</th>
                                <th>Alt</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($card as $cards)
                            <tr>
                                <td>{{$cards->id}}</td>
                                <td>{{$cards->title}}</td>
                                
                                <td>{{$cards->desc}}</td>
                                
                                <td>{{$cards->alt}}</td>
                                <td>{{$cards->order}}</td>
                                <td>
                                    <a href="{{url('/dashboard/homecard/edit/'.$cards->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('/dashboard/homecard/delete/'.$cards->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection