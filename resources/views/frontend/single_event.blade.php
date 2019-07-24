@extends('layouts.frontend')
@section('title','Event')

@section('content')
    <div class="single-service-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 col-xs-12">
                    <div class="single-service-wrap">
                            <div class="single-service-img">
                                <img src="{{asset('single_event_images/'.$event->image)}}" alt="">
                            </div><br><br>
                        <h3>{{$event->title}}</h3>
                        <p>{{$event->desc}}</p>
                        <p>@lang('header.Event Date') - {{$event->event_date->format('d M Y')}}</p>
                        <p>@lang('header.Event Time') -  {{date('h:i A',strtotime($event->event_time))}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection