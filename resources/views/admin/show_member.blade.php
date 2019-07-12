@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Show Member</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Member </a>
                        </li>
                        <li class="active">
                            Show Member
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form action=""  class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Name</label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->name}}" name="name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Phone</label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->phone}}" name="phone" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Blood Group</label>
                        <div class="col-md-10">
                           <select disabled class="form-control" name="blood_group">

                               <option value="{{$member->blood_group}}">{{$member->blood_group}}</option>
                               <option value="A+">A+</option>
                               <option value="A-">A-</option>
                               <option value="B+">B+</option>
                               <option value="B-">B-</option>
                               <option value="AB+">AB+</option>
                               <option value="AB-">AB-</option>
                               <option value="O-">O-</option>
                               <option value="O-">O-</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Current Address</label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->current_address}}" name="current_address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Permanent Address </label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->permanent_address}}" name="permanent_address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Home District </label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->home_district}}" name="home_district" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Department </label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->department}}" name="department" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Department Roll </label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->department_roll}}" name="department_roll" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Designation </label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->designation}}" name="designation" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Biography</label>
                        <div class="col-md-10">
                            <textarea disabled class="form-control" rows="5" name="biography" required>{{$member->biography}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Skills </label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->skills}}" name="skills" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Achievement </label>
                        <div class="col-md-10">
                            <input disabled type="text" class="form-control" value="{{$member->achievement}}" name="achievement" required>
                        </div>
                    </div>


                    <img height="80px" width="120px" src="{{asset('member_images/'.$member->image)}}">

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Image</label>
                        <div class="col-md-10">
                            <input disabled type="file" class="form-control" name="image" >
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
