@extends('layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit menu links</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Edit menu link</h6>
                </div>
                <div class="col-6">
                    <h6 style="text-align:right"><a href="{{'/dashboard/menu'}}" class="btn btn-primary btn-back">Back menu link</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{url('/dashboard/update/'.$menu->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group" >
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Name" value="{{$menu->name}}">
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" name="link" class="form-control"  placeholder="Link" value="{{$menu->link}}">
                        </div>
                    </div>
                    <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                        <div class="form-group">
                            <label>Enable or disable sub-menu</label>
                            <div class="radio col-xs-12">
                                <label>
                                <input type="radio" name="radios" class="track-order-change" id="pictureTar" value="1" {{ ($menu->radios=="1")? "checked" : "" }}>
                                On
                                </label>
                            </div>

                            <div class="radio col-xs-12">
                                <label>
                                <input type="radio" name="radios" class="track-order-change" id="radio3" value="0" {{ ($menu->radios=="0")? "checked" : "" }}/>
                                Off
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 panel-collapse in mb-3 {{ ($menu->radios== 0)? 'collapse' : ''}}" id="pictureTarifa" style="background-color:#978c8c; padding:20px"!important;>
                        <label>HTML Submenu</label>
                        <textarea name="submenu" id="" rows="5" class="form-control">{{$menu->submenu}}</textarea>
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
                            <input type="text" name="order" class="form-control"  placeholder="Order" value="{{$menu->order}}">
                        </div>
                    </div>
                        
                    <button type="submit" class="btn btn-primary mx-auto" style="margin-left:300px">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection