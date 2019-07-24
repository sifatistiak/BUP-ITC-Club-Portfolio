@extends('layouts.frontend')
@section('title','Members')
@section('content')


<!-- team-area start -->
<section class="team-area ptb-140">
<div class="container">
    <div class="row">

    </div>
    <div class="row">
        @foreach($members as $member)
       <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
            <div class="team-wrap">
                <div class="team-img">
                    <img src="{{asset('member_images/'.$member->image)}}" alt="" />
                </div>
                <div class="team-content">
                    <div class="team-info">
                        <h3>{{$member->name}}</h3>
                        <p>{{str_limit($member->biography)}}</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
           <br>
                <a href="{{route('single.member',$member->id)}}" class="btn btn-success">Full info</a>
        </div>
            @endforeach
    </div>
</div>
</section>
<!-- team-area end -->

@endsection
