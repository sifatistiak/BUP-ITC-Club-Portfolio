@extends('layouts.frontend')
@section('title','Achievements')
@section('content')

<!-- porftolio-area start -->
<section class="porftolio-area ptb-100">
<div class="container">

    <div class="row grid">
        @foreach($achievements as $achievement)
        <div class="col-md-4 portfolio website col-sm-6 col-xs-12 col">
            <div class="portfolio-wrap">
                <div class="overlay">
                    <a  href="{{route('single.achievement',$achievement->id)}}">
                        <i class="fa fa-link"></i>
                    </a>
                    <h3>{{$achievement->title}}</h3>
                    <p>{{str_limit($achievement->desc,50)}}</p>
                </div>
                <div class="portfolio-img">
                    <img src="{{asset('achievement_images/'.$achievement->image)}}" alt="" />
                </div>
            </div>
        </div>
            @endforeach
    </div>
    <div class="row ">
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
                {{$achievements->links()}}
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</section>
<!-- porftolio-area end -->

@endsection
