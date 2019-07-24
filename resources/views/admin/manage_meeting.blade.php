@extends('layouts.admin')
@section('title','Home')
@section('content')
    @include('includes.message')
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Meeting</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">DUCC</a>
                    </li>
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                        <a href="#"> Meetings</a>
                    </li>
                </ol>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="demo-box m-t-20">
                <div class="m-b-30">
                    <a href="{{route('admin.meeting.create')}}">
                        <button id="addToTable" class="btn btn-success waves-effect waves-light">Send email
                            <i class="mdi mdi-plus-circle-outline"></i></button>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($meetings as $meeting)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$meeting->subject}}</td>
                                <td>{{str_limit($meeting->desc,50)}}</td>

                                <td>{{$meeting->date->format('d M Y')}}</td>
                                <td>{{date('h:i A',strtotime($meeting->time))}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            {{$meetings->links()}}
        </div>
    </div>
@endsection
