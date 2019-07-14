@extends('layouts.frontend')
@section('title','Member')

@section('content')
    <div class="single-service-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 col-xs-12">
                    <div class="single-service-wrap">
                            <div class="single-service-img">
                                <img src="{{asset('member_images/'.$member->image)}}" alt="">
                            </div><br><br>
                        <h3>{{$member->name}}</h3>
                        <p>{{$member->email}}</p>
                        <p>{{$member->designation}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection