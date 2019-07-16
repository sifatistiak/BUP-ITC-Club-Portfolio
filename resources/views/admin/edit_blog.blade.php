@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Blog</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Blog </a>
                        </li>
                        <li class="active">
                            Edit
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="{{route('admin.blog.update',$blog->id)}}"  class="form-horizontal" name="category" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label class="col-md-2 control-label">Blog Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$blog->title}}" name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Blog Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="12" name="desc" required>{{$blog->desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Posted By</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$blog->posted_by}}" name="posted_by" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Blog Image</label>
                        <div class="col-md-10">
                        <img height="100px" width="140px" src="{{asset('blog_images/'.$blog->image)}}"><br>
                            <input type="file" class="form-control" name="image" >
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
