@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Testimonial </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                        <li class="active">
                            Edit Testimonial
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="{{route('admin.testimonial.update',$testimonial->id)}}" class="form-horizontal"
                      name="category" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label class="col-md-2 control-label">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$testimonial->name}}" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Designation</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$testimonial->designation}}"
                                   name="designation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="12" name="desc"
                                      required>{{$testimonial->desc}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Image</label>
                        <div class="col-md-10">
                            <img height="100px" width="140px" src="{{asset('testimonial_images/'.$testimonial->image)}}">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">&nbsp;</label>
                        <div class="col-md-10">

                            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md">
                                Submit
                            </button>
                        </div>
                    </div>

                </form>
            </div>


        </div>

    </div>
@endsection
