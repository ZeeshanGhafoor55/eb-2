@extends('layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Footer</h1>

    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
<!-- DataTales Example -->
    <form action="{{url('/dashboard/footer')}}" method="POST" enctype="multipart/form-data">
     @csrf
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Footer column 1</h6>
                    </div>
                    <div class="col-6">
                        <h6 style="text-align:right"><a href="{{'/dashboard/footer'}}" class="btn btn-primary btn-back">Edit</a></h6>
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
                                    <input type="text" name="footer_col1_title" class="form-control"  placeholder="Title">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="footer_col1_desc" rows="1" class="form-control"></textarea>
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
                        <h6 class="m-0 font-weight-bold text-primary">Footer column 2</h6>
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
                                <input type="text" name="footer_col2_title" class="form-control"  placeholder="Name">
                            </div>
                        </div>
                        <div class="panel-collapse in mb-3" id="pictureTarifa" style="background-color:#dbd1d1; padding:15px"!important;>
                            <label>Footer Links</label>
                            <textarea name="footer_col2_link" id="" rows="2" class="form-control"></textarea>
                            <div class="alert alert-success">
                                <h5>HTML code - submenu example</h5>
                                <p>
                                    &lt;ul class="menu"&gt; <br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                Home 
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                About
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                Service
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                blog 
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                Contact 
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                    &lt;/ul&gt;
                                </p>
                            </div>
                        </div>
                        
                        <!-- <div class="card col-md-6" style="background-color:#978c8c; padding:20px"!important;>
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="text" name="link" class="form-control"  placeholder="Link">
                            </div>
                        </div> -->
                        <!-- <div class="card" style="background-color:#978c8c; padding:20px"!important;>
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
                        </div> -->

                        
                        <!-- <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                            <div class="form-group">
                                <label for="">Order</label>
                                <input type="text" name="order" class="form-control"  placeholder="Order">
                            </div>
                        </div> -->
                            
                        <!-- <button type="submit" class="btn btn-primary mx-auto" style="margin-left:300px">Create</button> -->
                    
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
                                <input type="text" name="footer_col3_title" class="form-control"  placeholder="Name">
                            </div>
                        </div>
                        <div class="panel-collapse in mb-3" id="pictureTarifa" style="background-color:#dbd1d1; padding:15px"!important;>
                            <label>Footer Links</label>
                            <textarea name="footer_col3_link" id="" rows="2" class="form-control"></textarea>
                            <div class="alert alert-success">
                                <h5>HTML code - submenu example</h5>
                                <p>
                                    &lt;ul class="menu"&gt; <br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                Info@eb3hire.com 
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                000-000-0000
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                Privacy Policy
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li class="menu-item"&gt;  
                                            &lt;a class="menu-link" href="#"&gt; 
                                                Terms & Conditions 
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                    &lt;/ul&gt;
                                </p>
                            </div>
                        </div>
                        
                        <!-- <div class="card col-md-6" style="background-color:#978c8c; padding:20px"!important;>
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="text" name="link" class="form-control"  placeholder="Link">
                            </div>
                        </div> -->
                        <!-- <div class="card" style="background-color:#978c8c; padding:20px"!important;>
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
                        </div> -->

                        
                        <!-- <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                            <div class="form-group">
                                <label for="">Order</label>
                                <input type="text" name="order" class="form-control"  placeholder="Order">
                            </div>
                        </div> -->
                            
                        <!-- <button type="submit" class="btn btn-primary mx-auto" style="margin-left:300px">Create</button> -->
                    
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Footer column 4</h6>
                    </div>
                    <!-- <div class="col-6">
                        <h6 style="text-align:right"><a href="{{'/dashboard/menu'}}" class="btn btn-primary btn-back">Back menu link</a></h6>
                    </div> -->
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Title</label>
                                    <input type="text" name="footer_col4_title" class="form-control"  placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Social Title</label>
                                    <input type="text" name="footer_col4_socialtitle" class="form-control"  placeholder="Name">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-collapse in mb-3" id="pictureTarifa" style="background-color:#dbd1d1; padding:15px"!important;>
                            <label>Footer Links</label>
                            <textarea name="footer_col4_sociallink" id="" rows="2" class="form-control"></textarea>
                            <div class="alert alert-success">
                                <h5>HTML code - submenu example</h5>
                                <p>
                                    &lt;ul&gt; <br>
                                        &lt;li&gt;  
                                            &lt;a href="https://www.facebook.com/"&gt; 
                                                Facebook 
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li&gt;  
                                            &lt;a href="https://twitter.com/i/flow/login"&gt; 
                                                Twitter
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li &gt;  
                                            &lt;a href="https://www.instagram.com/accounts/login/"&gt; 
                                                Instagram
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                        &lt;li&gt;  
                                            &lt;a href="https://www.youtube.com/"&gt; 
                                                Youtube 
                                            &lt;/a&gt;<br>
                                        &lt;/li&gt;<br>
                                    &lt;/ul&gt;
                                </p>
                            </div>
                        </div>
                        
                        <!-- <div class="card col-md-6" style="background-color:#978c8c; padding:20px"!important;>
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="text" name="link" class="form-control"  placeholder="Link">
                            </div>
                        </div> -->
                        <!-- <div class="card" style="background-color:#978c8c; padding:20px"!important;>
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
                        </div> -->

                        
                        <!-- <div class="card" style="background-color:#978c8c; padding:20px"!important;>
                            <div class="form-group">
                                <label for="">Order</label>
                                <input type="text" name="order" class="form-control"  placeholder="Order">
                            </div>
                        </div> -->
                            
                        <!-- <button type="submit" class="btn btn-primary mx-auto" style="margin-left:300px">Create</button> -->
                    
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
                            <input type="text" name="copyright" class="form-control"  placeholder="Name">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="py-3">
                <div class="row">
                <!-- <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button> -->
                <button type="submit" class="btn btn-secondary btn-lg mx-auto">Block level button</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

@endsection