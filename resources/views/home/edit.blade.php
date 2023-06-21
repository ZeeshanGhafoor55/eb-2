@extends('layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Home</h1>

    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
<!-- DataTales Example -->
    <form action="{{url('/dashboard/home/update')}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Hero Section</h6>
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
                                    <input type="text" name="hero_title" class="form-control"  placeholder="Title" value="{{$home->hero_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="hero_desc" rows="1" class="form-control ">{{$home->hero_desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Button Text</label>
                                    <input type="text" name="hero_btn_text" class="form-control"  placeholder="Title" value="{{$home->hero_btn_text}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Button Link</label>
                                    <input type="text" name="hero_btn_link" class="form-control"  placeholder="Title" value="{{$home->hero_btn_link}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Hero Image</label>
                                    <select name="hero_img" class="form-control">
                                        @foreach ($photo as $photos)
                                        <option value="{{$photos->id}}">{{$photos->name}}</option>
                                        @endforeach
                                    </select>
                                    <!-- <input type="text" name="hero_img" class="form-control"  placeholder="Title" value="{{$home->hero_btn_img}}"> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Hero Background Image</label>
                                    <select name="hero_bg_img" class="form-control">
                                        @foreach ($photo as $photos)
                                        <option value="{{$photos->id}}">{{$photos->name}}</option>
                                        @endforeach
                                    </select>
                                    <!-- <input type="text" name="hero_bg_img" class="form-control"  placeholder="Title" value="{{$home->hero_bg_img}}"> -->
                                </div>
                            </div>
                        </div>
                    </div> 
                        <button type="submit" class="btn btn-primary">Update</button>  
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Steps to Get Green Card</h6>
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
                                    <input type="text" name="greencard_title" class="form-control"  placeholder="Title" value="{{$home->greencard_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="greencard_desc" rows="1" class="form-control ">{{$home->greencard_desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Button Text</label>
                                    <input type="text" name="greencard_btntext" class="form-control"  placeholder="Title" value="{{$home->greencard_btntext}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Button Link</label>
                                    <input type="text" name="greencard_btnlink" class="form-control"  placeholder="Title" value="{{$home->greencard_btnlink}}">
                                </div>
                            </div>
                        </div>
                    </div> 
                        <button type="submit" class="btn btn-primary">Update</button>  
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Applying is Easy</h6>
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
                                    <input type="text" name="apply_title" class="form-control"  placeholder="Title" value="{{$home->apply_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="apply_desc" rows="1" class="form-control ">{{$home->apply_desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Card 1</label>
                                    <input type="text" name="apply1_number" class="form-control"  placeholder="card Number" value="{{$home->apply1_number}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Sub Title</label>
                                    <input type="text" name="apply1_subtitle" class="form-control"  placeholder="Sub Title" value="{{$home->apply1_subtitle}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Sub Descritption</label>
                                    <input type="text" name="apply1_subdesc" class="form-control"  placeholder="Sub Descritption" value="{{$home->apply1_subdesc}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Card 2</label>
                                    <input type="text" name="apply2_number" class="form-control"  placeholder="Card Number" value="{{$home->apply2_number}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Sub Title</label>
                                    <input type="text" name="apply2_subtitle" class="form-control"  placeholder="Sub Title" value="{{$home->apply2_subtitle}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Sub Description</label>
                                    <input type="text" name="apply2_subdesc" class="form-control"  placeholder="Title" value="{{$home->apply2_subdesc}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Card 3</label>
                                    <input type="text" name="apply3_number" class="form-control"  placeholder="Card Number" value="{{$home->apply3_number}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Sub Title</label>
                                    <input type="text" name="apply3_subtitle" class="form-control"  placeholder="Sub Title" value="{{$home->apply3_subtitle}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Sub Description</label>
                                    <input type="text" name="apply3_subdesc" class="form-control"  placeholder="Sub Description" value="{{$home->apply3_subdesc}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Button Text</label>
                                    <input type="text" name="apply_btntext" class="form-control"  placeholder="Title" value="{{$home->apply_btntext}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Button Link</label>
                                    <input type="text" name="apply_btnlink" class="form-control"  placeholder="Title" value="{{$home->apply_btnlink}}">
                                </div>
                            </div>
                        </div>
                    </div> 
                        <button type="submit" class="btn btn-primary">Update</button>  
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">What your Sponsoring Employers Say</h6>
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
                                    <input type="text" name="sponsoring_title" class="form-control"  placeholder="Title" value="{{$home->sponsoring_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="sponsoring_desc" rows="1" class="form-control ">{{$home->sponsoring_desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                    </div> 
                        <button type="submit" class="btn btn-primary">Update</button>  
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">The Latest News and Insights on US Immigration</h6>
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
                                    <input type="text" name="latestnews_title" class="form-control"  placeholder="Title" value="{{$home->latestnews_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="latestnews_desc" rows="1" class="form-control ">{{$home->latestnews_desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Button Text</label>
                                    <input type="text" name="latestnews_btntext" class="form-control"  placeholder="Title" value="{{$home->latestnews_btntext}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group" >
                                    <label for="">Button Link</label>
                                    <input type="text" name="latestnews_btnlink" class="form-control"  placeholder="Title" value="{{$home->latestnews_btnlink}}">
                                </div>
                            </div>
                        </div>
                    </div> 
                        <button type="submit" class="btn btn-primary">Update</button>  
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">WFrequently Asked Questions</h6>
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
                                    <input type="text" name="faq_title" class="form-control"  placeholder="Title" value="{{$home->faq_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="faq_desc" rows="1" class="form-control ">{{$home->faq_desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                    </div> 
                        <button type="submit" class="btn btn-primary">Update</button>  
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">SEO Section</h6>
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
                                    <label for="">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control"  placeholder="Meta Title" value="{{$home->meta_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color:#dbd1d1; padding:15px"!important;>
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <textarea name="meta_desc" rows="1" class="form-control ">{{$home->meta_desc}}</textarea>
                                </div>
                            </div>
                        </div> 
                    </div> 
                        <button type="submit" class="btn btn-primary">Update</button>  
                </div>
            </div>
        </div>


        <!-- <div class="mb-4">
            <div class="py-3">
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-lg mx-auto">Update</button>
                </div>
            </div>
        </div> -->
    </form>
</div>
<!-- /.container-fluid -->

@endsection