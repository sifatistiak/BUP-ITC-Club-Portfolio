@extends('layouts.admin')
@section('title','Home')
@section('content')

    @include('includes.message')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Member</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li>
                            <a href="#">Member </a>
                        </li>
                        <li class="active">
                            Add Member
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="{{route('admin.member.store')}}"  class="form-horizontal" name="category" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" value="" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Phone</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="phone" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Blood Group</label>
                        <div class="col-md-10">
                           <select class="form-control" name="blood_group">
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
                            <input type="text" class="form-control" value="" name="current_address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Permanent Address </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="permanent_address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Home District </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="home_district" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Department </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="department" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Department Roll </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="department_roll" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Designation </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="designation" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Biography</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="10" name="biography" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Skills </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="skills" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Achievement </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="" name="achievement" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Image</label>
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
