@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Blog</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Blog </a>
                        </li>
                        <li class="active">
                            Add Blog
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="{{route('admin.blog.store')}}"  class="form-horizontal" name="category" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-2 control-label">Blog Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Blog Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="10" name="desc" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Posted By</label>
                        <div class="col-md-10">
                            <input required type="text" class="form-control" value="" name="posted_by" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Blog Image</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" name="image" required>
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
