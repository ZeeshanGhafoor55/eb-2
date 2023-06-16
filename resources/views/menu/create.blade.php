@extends('layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Create menu links</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Create menu link</h6>
                </div>
                <div class="col-6">
                    <h6 style="text-align:right"><a href="{{'/dashboard/menu'}}" class="btn btn-primary btn-back">Back menu link</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{url('/dashboard/create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group" >
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Name">
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" name="link" class="form-control"  placeholder="Link">
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group">
                            <label>Enable or disable sub-menu</label>
                            <div class="radio col-xs-12">
                                <label>
                                <input type="radio" name="radios" class="track-order-change" id="pictureTar" value="1">
                                On
                                </label>
                            </div>

                            <div class="radio col-xs-12">
                                <label>
                                <input type="radio" name="radios" class="track-order-change" id="radio3" value="0" checked/>
                                Off
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 panel-collapse collapse in mb-3" id="pictureTarifa" style="background-color:#978c8c; padding:20px"!important;>
                        <label>HTML Submenu</label>
                        <textarea name="submenu" id="" rows="5" class="form-control"></textarea>
                        <div class="alert alert-success">
                            <h5>HTML code - submenu example</h5>
                            <p>
                                    &lt;div class="dropdown-menu"&gt; <br>
                                        &lt;a class="dropdown-item" href="#"&gt; Submenu test &lt;/a&gt;<br>
                                        &lt;a class="dropdown-item" href="#"&gt; Submenu test &lt;/a&gt;<br>
                                        &lt;a class="dropdown-item" href="#"&gt; Submenu test &lt;/a&gt;<br>
                                    &lt;/div&gt;
                            </p>
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group">
                            <label for="">Order</label>
                            <input type="text" name="order" class="form-control"  placeholder="Order">
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