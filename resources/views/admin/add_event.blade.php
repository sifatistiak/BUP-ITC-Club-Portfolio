@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Event</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Event </a>
                        </li>
                        <li class="active">
                            Add Event
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="{{route('admin.events.store')}}"  class="form-horizontal" name="category" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="10" name="desc" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Date</label>
                        <div class="col-md-10">
                            <input required type="date" class="form-control" value="" name="event_date" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Time</label>
                        <div class="col-md-10">
                            <input required type="time" class="form-control" value="" name="event_time" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Image</label>
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
