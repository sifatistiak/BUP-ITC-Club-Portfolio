@extends('layouts.frontend')
@section('title','Achievement')

@section('content')
    <div class="single-service-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 col-xs-12">
                    <div class="single-service-wrap">
                            <div class="single-service-img">
                                <img src="{{asset('event_images/'.$achievement->image)}}" alt="">
                            </div><br><br>
                        <h3>{{$achievement->title}}</h3>
                        <p>{{$achievement->desc}}</p>
                        <p>Achievement Date - {{$achievement->achievement_date->format('d M Y')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection