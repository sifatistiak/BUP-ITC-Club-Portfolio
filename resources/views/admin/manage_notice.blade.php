@extends('layouts.admin')
@section('title','Home')
@section('content')
    @include('includes.message')
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Notice</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">DUCC</a>
                    </li>
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                        <a href="#">Manage Notice</a>
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
                    <a href="{{route('admin.notice.create')}}">
                        <button id="addToTable" class="btn btn-success waves-effect waves-light">Add
                            <i class="mdi mdi-plus-circle-outline"></i></button>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Notice Title</th>
                            <th>Notice Description</th>
                            <th>Notice Date</th>
                            <th>Posted By</th>
                            <th>Notice From</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notices as $notice)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$notice->title}}</td>
                                <td>{{str_limit($notice->desc,50)}}</td>
                                <td>{{$notice->date}}</td>
                                <td>{{$notice->posted_by}}</td>
                                <td>{{$notice->notice_from}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.notice.edit',$notice->id)}}">Edit</a>

                                    <a href="#deleteModal{{$notice->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

                                    <div class="modal fade" id="deleteModal{{$notice->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Notice</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3> Are You Sure To Delete? </h3>
                                                    <form action="{{route('admin.notice.destroy',$notice->id)}}"
                                                          method="POST">
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
