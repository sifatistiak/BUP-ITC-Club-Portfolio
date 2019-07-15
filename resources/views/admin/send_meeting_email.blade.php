@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title"> Meeting</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Meeting </a>
                        </li>
                        <li class="active">
                             Meeting
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="{{route('admin.meeting.store')}}"  class="form-horizontal" name="category" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-2 control-label">Subject</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="subject" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="12" name="desc" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Date</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" value="" name="date" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label"> Time</label>
                        <div class="col-md-10">
                            <input type="time" class="form-control" value="" name="time">
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
