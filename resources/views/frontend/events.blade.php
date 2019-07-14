@extends('layouts.frontend')
@section('title','Events')
@section('content')

    <!-- .service-area start -->
<section class="service-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach($events as $event)
            <div class="col-md-4 col-sm-6 col-xs-12 col">
                <div class="service-wrap mb-30">
                    <div class="service-img">
                        <img src="{{asset('event_images/'.$event->image)}}" alt="" />
                    </div>
                    <div class="service-content">
                        <h3>{{$event->title}}</h3>
                        <p>{{str_limit($event->desc,150)}}</p>
                        <a href="{{route('single.event',$event->id)}}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- .service-area end -->

@endsection
