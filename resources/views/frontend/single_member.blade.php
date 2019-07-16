@extends('layouts.frontend')
@section('title','Member')

@section('content')
    <div class="single-service-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 col-xs-12">
                    <div class="single-service-wrap">
                            <div class="single-service-img">
                                <img src="{{asset('single_member_images/'.$member->image)}}" alt="">
                            </div><br><br>
                        <h3>  {{$member->name}}</h3>
                        <p>Email : {{$member->email}}</p>
                        <p>Designation : {{$member->designation}}</p>
                        <p>Phone : {{$member->phone}}</p>
                        <p>Current Address : {{$member->current_address}}</p>
                        <p>Permanent Address : {{$member->permanent_address}}</p>
                        <p>Department : {{$member->department}}</p>
                        <p>Biography : {{$member->biography}}</p>
                        <p>Skills : {{$member->skills}}</p>
                        <p>Achievement : {{$member->achievement}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection