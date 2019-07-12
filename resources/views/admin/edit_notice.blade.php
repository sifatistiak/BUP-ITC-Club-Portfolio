@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Notice</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Notice </a>
                        </li>
                        <li class="active">
                            Edit Notice
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form action="{{route('admin.notice.update',$notice->id)}}"  class="form-horizontal" name="category" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label class="col-md-2 control-label">Notice Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$notice->title}}" name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Notice Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="desc" required>{{$notice->desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Notice Date</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" value="{{$notice->date}}" name="date" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Posted By</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$notice->posted_by}}" name="posted_by" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Notice From</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$notice->notice_from}}" name="notice_from" required>
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
