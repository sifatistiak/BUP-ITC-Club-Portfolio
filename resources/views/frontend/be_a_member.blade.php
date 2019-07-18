@extends('layouts.frontend')
@section('title','Be a Member')
@section('content')

    <!-- .service-area start -->
<section class="service-area ptb-100">
    <div class="container">
        <div class="row">
            @include('includes.message')
            <div class="col-md-8 col-xs-12 fadeInRight wow">
                <form action="{{route('submit.member')}}"  class="form-horizontal" name="category" method="post" enctype="multipart/form-data">
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

                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- .service-area end -->

@endsection
