@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Event </a>
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
            <div class="col-md-6">
                <form action="{{route('admin.events.update',$event->id)}}"  class="form-horizontal" name="category" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$event->title}}" name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="desc" required>{{$event->desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Date</label>
                        <div class="col-md-10">
                            <input required type="date" class="form-control" value="{{$event->event_date->format('Y-m-d')}}" name="event_date" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Time</label>
                        <div class="col-md-10">
                            <input required type="time" class="form-control" value="{{$event->event_time}}" name="event_time" >
                        </div>
                    </div>
                    <div class="form-group">

                        <img height="80px" width="120px" src="{{asset('event_images/'.$event->image)}}">
                        <label class="col-md-2 control-label">Event Image</label>
                        
                        <div class="col-md-10">
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
