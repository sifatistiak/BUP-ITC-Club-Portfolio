@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Acheivement</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Acheivement </a>
                        </li>
                        <li class="active">
                            Edit Acheivement
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
                        <label class="col-md-2 control-label">Acheivement Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$achievement->title}}" name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Acheivement Description</label>
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
                        <label class="col-md-2 control-label">Acheivement bio</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="achiever_bio" required>{{$achievement->achiever_bio}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Acheivement Date</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" value="{{$achievement->achievement_date}}" name="achievement_date" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Acheivement category</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{$achievement->category}}" name="category" >
                        </div>
                    </div>




                    <div class="form-group">
                    <img height="80px" width="120px" src="{{asset('achievement_images/'.$achievement->image)}}">
                        <label class="col-md-2 control-label">Acheivement Image</label>
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
