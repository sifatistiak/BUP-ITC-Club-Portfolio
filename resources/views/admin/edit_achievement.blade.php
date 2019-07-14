@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Achievement</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Achievement </a>
                        </li>
                        <li class="active">
                            Edit Achievement
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form action="{{route('admin.achievement.update',$achievement->id)}}"  class="form-horizontal" name="category" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label class="col-md-2 control-label">Achievement Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$achievement->title}}" name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Achievement Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="desc" required>{{$achievement->desc}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Acheiver Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$achievement->achiever}}" name="achiever" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Achievement bio</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="achiever_bio" required>{{$achievement->achiever_bio}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Achievement Date</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" value="{{$achievement->achievement_date->format('Y-m-d')}}" name="achievement_date" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Achievement category</label>
                        <div class="col-md-10">
                            <input required type="text" class="form-control" value="{{$achievement->category}}" name="category" >
                        </div>
                    </div>




                    <div class="form-group">
                    <img height="80px" width="120px" src="{{asset('achievement_images/'.$achievement->image)}}">
                        <label class="col-md-2 control-label">Achievement Image</label>
                        <div class="col-md-10">
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
