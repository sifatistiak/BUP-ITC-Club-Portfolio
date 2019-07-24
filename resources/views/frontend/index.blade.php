@extends('layouts.frontend')
@section('title','DUCC')
@section('content')
    <!-- slider area start -->
    <section id="" class="slider-area">

        <div class="slider-active2 slider-next-prev-style">
            <div class="slider-items">
                <img src="{{asset('frontend/assets/images/ducs/image034.jpg')}}" alt="" class="slider">
                <div class="slider-content text-center">
                    <div class="table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                                        <h2>@lang('header.Dhaka University Cultural Club')</h2>
                                        <p> ঢাকা বিশ্ববিদ্যালয়ের বিভিন্ন বিভাগ ও হলের শিক্ষার্থীদের সংস্কৃতিচর্চার একটি
                                            অভিন্ন প্ল্যাটফর্ম তৈরি এবং তাদের সাংস্কৃতিক প্রতিভাকে বিকশিত করার লক্ষ্যে
                                            ২০১৫ সালের ৫ই সেপ্টেম্বর কিছু স্বপ্নদ্রষ্টা মানুষের হাত ধরে জন্ম নেয় ‘ঢাকা
                                            বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদ’ (ইংরেজিতে ‘Dhaka University Cultural Society’
                                            বা সংক্ষেপে DUCS)।</p>
                                        <ul>
                                            <li><a href="{{route('be.a.member')}}">@lang('header.Be a Member')</a></li>
                                            <li><a href="{{route('index')}}">@lang('header.Get Started')</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-items">
                <img src="{{asset('frontend/assets/images/ducs/s4.jpg')}}" alt="" class="slider">
                <div class="slider-content text-center">
                    <div class="table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                                        <h2>@lang('header.Dhaka University Cultural Club')</h2>
                                        <p>ঢাকা বিশ্ববিদ্যালয়ের বিভিন্ন বিভাগ ও হলের শিক্ষার্থীদের সংস্কৃতিচর্চার একটি
                                            অভিন্ন প্ল্যাটফর্ম তৈরি এবং তাদের সাংস্কৃতিক প্রতিভাকে বিকশিত করার লক্ষ্যে
                                            ২০১৫ সালের ৫ই সেপ্টেম্বর কিছু স্বপ্নদ্রষ্টা মানুষের হাত ধরে জন্ম নেয় ‘ঢাকা
                                            বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদ’ (ইংরেজিতে ‘Dhaka University Cultural Society’
                                            বা সংক্ষেপে DUCS)।</p>
                                        <ul>
                                            <li><a href="{{route('be.a.member')}}">@lang('header.Be a Member')</a></li>
                                            <li><a href="{{route('index')}}">@lang('header.Get Started')</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- about-area start -->
    <section id="about" class="about-area ptb-140">
        <div class="container">
            <div class="row">
                {{--<div class="col-md-6 col-xs-12 wow fadeInLeft">--}}
                {{--<div class="about-img">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{----}}
                <div class="col-md-6 col-xs-12 wow fadeInLeft">

                    <img src="{{asset('frontend/assets/images/ducs/about.jpg')}}" alt=""/></div>
                <div class="col-md-6 col-xs-12 wow fadeInRight">
                    <div class="about-wrap">
                        <h2>@lang('header.who we are')</h2>
                        <p>@lang('header.about')</p>
                        <h2>@lang('header.Purpose of the organization')</h2>
                        <ul>
                            <li>@lang('header.l1')</li>
                            <li>@lang('header.l2')</li>
                            <li>@lang('header.l3')</li>
                            <li>@lang('header.l4')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->

    <!-- .event-area start -->
    <section id="event" class="service-area pb-160">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Our Upcoming Events')</h2>
                        <p>@lang('header.event desc')</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($upcomingEvents as $event)
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="{{asset('event_images/'.$event->image)}}" alt=""/>
                            </div>
                            <div class="service-content">
                                <h3>{{$event->title}}</h3>
                                <p>{{str_limit($event->desc,150)}}</p>
                                <a href="{{route('single.event',$event->id)}}">@lang('header.Read More')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><br><br>

    <div class="featured-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Our Events')</h2>
                        <p>@lang('header.events')</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="featured-wrap">
                        <ul>
                            @for($i = 0; $i<count($events); $i+=2)
                                <li class="wow fadeInLeft" data-wow-delay=".1s">
                                    <a href="{{route('single.event',$events[$i]->id)}}">
                                        <h3>{{$events[$i]->event_date->format('d M Y')}}</h3>
                                        <div class="featured-content">
                                            <div class="featured-img">
                                                <img src="{{asset('event_images/'.$events[$i]->image)}}" alt=""/>

                                            </div>
                                            <div class="featured-info">
                                                <h4>{{$events[$i]->title}}</h4>
                                                <p>{{str_limit($events[$i]->desc,50)}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @if($events[$i+1])
                                    <li class="wow fadeInLeft" data-wow-delay=".5s">
                                        <a href="{{route('single.event',$events[$i+1]->id)}}">
                                            <h3>{{$events[$i+1]->event_date->format('d M Y')}}</h3>
                                            <div class="featured-content">
                                                <div class="featured-img">
                                                    <img src="{{asset('event_images/'.$events[$i+1]->image)}}" alt=""/>
                                                </div>
                                                <div class="featured-info">

                                                    <h4>{{$events[$i+1]->title}}</h4>
                                                    <p>{{str_limit($events[$i+1]->desc,50)}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endfor
                            <li>
                                <a href="{{route('events')}}"><h3>@lang('header.View All')</h3></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .event-area end -->
    <!-- fanfact-area start -->
    <section class="fanfact-area parallax black-opacity" data-speed="5"
             data-bg-image="{{asset('frontend/assets/images/ducs/image030.jpg')}}">
        <div class="table">
            <div class="table-cell">
                <div class="container">

                </div>
            </div>
        </div>
    </section>
    <!-- fanfact-area end -->

    <!-- Achievement-area start -->
    <section id="achievements" class="porftolio-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Our Achievement')</h2>
                        <p>@lang('header.achievement desc')</p>
                    </div>
                </div>
            </div>
            <div class="row grid">
                @foreach($achievements as $achievement)
                    <div class="col-md-4 portfolio website col-sm-6 col-xs-12 col">
                        <div class="portfolio-wrap">
                            <div class="overlay">
                                <a href="{{route('single.achievement',$achievement->id)}}">
                                    <i class="fa fa-link"></i>
                                </a>
                                <h3>{{$achievement->title}}</h3>
                                <p>{{str_limit($achievement->desc,50)}}</p>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('achievement_images/'.$achievement->image)}}" alt=""/>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <a href="{{route('achievements')}}" class="btn btn-primary">@lang('header.View All')</a>
                </div>
            </div>
        </div>
    </section>
    <!-- porftolio-area end -->

    <!-- notice-area start -->
    <section id="notice" class="service-area pb-160">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Notice Board')</h2>
                        <p>@lang('header.notice')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 col"></div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                {{--<img src="{{asset('blog_images/'.$blogPost->image)}}" alt=""/>--}}
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">

                                </div>
                                @if($notice)
                                    <h3><a href="{{route('single.notice',$notice->id)}}">{{$notice->title}}</a></h3>
                                    <p>{{str_limit($notice->desc,300)}}</p>

                                    <a href="{{route('single.notice',$notice->id)}}"
                                       class="btn-style">@lang('header.Read More')</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 col"></div>

            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 col"></div>
                <div class="col-md-4 col-sm-6 col-xs-12 col">
                    <a href="{{route('notices')}}" class="btn btn-primary">@lang('header.View All')</a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 col"></div>
            </div>
            <br>
        </div>
    </section>
    <!-- notice-area end -->

    <!-- video-area start -->
    <section class="video-area  parallax black-opacity wow fadeInUp" data-speed="5"
             data-bg-image="{{asset('frontend/assets/images/ducs/image046.jpg')}}">
        <h2 class="hidden">Video area</h2>
        <div class="table">
            <div class="table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="video-wrap text-center">
                                <a href="https://www.youtube.com/watch?v=Qf-Pv6p0vWY" class="video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-area end -->

    <!-- team-area start -->
    <section id="member" class="team-area ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Members')</h2>
                        <p>@lang('header.members desc')</p>
                    </div>
                </div>
            </div>
            {{--Static member--}}
            <div class="row">
                <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12" data-wow-delay=".4s"></div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <h3>@lang('header.principal advisor')</h3>
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image005.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'অধ্যাপক ড. মো. আখতারুজ্জামান'])</h3>
                                <p>@lang('header.member desc',['desc'=>'উপাচার্য,ঢাকা বিশ্ববিদ্যালয়'])</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-1 col-lg-2 col-sm-6 col-xs-12" data-wow-delay=".4s"></div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <h3>@lang('header.moderator')</h3>
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image007.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'সাবরিনা সুলতানা চৌধুরী'])</h3>
                                <p>@lang('header.member desc',['desc'=>'সহযোগী অধ্যাপক,গণযোগাযোগ ও সাংবাদিকতা বিভাগ, ঢাকা বিশ্ববিদ্যালয়'])</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <br><br>
            {{--Sikkhok upodesta--}}
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.teacher')</h2>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image009.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'ড. সৌমিত্র শেখর'])</h3>
                                <p>@lang('header.member desc',['desc'=>'অধ্যাপক,বাংলা বিভাগ,ঢাকা িশ্ববিদ্যালয়'])</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s"></div>

                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image011.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'মফিজুর রহমান'])</h3>
                                <p>@lang('header.member desc',['desc'=>'অধ্যাপক,গণযোগাযোগ ও সাংবাদিকতা বিভাগ,ঢাকা বিশ্ববিদ্যালয়'])</p>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s"></div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image013.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'সুদীপ চক্রবর্তী'])</h3>
                                <p>@lang('header.member desc',['desc'=>'সহকারী অধ্যাপক,থিয়েটার এন্ড পারফরমেন্স স্টাডিজবিভাগ, ঢাকা বিশ্ববিদ্যালয়'])</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>


            {{--member upodesta--}}
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Advisor member')</h2>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image015.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'জুনাইদ আহমেদ পলক'])</h3>
                                <p>@lang('header.member desc',['desc'=>'প্রতিমন্ত্রী, তথ্য ও যোগাযোগ প্রযুক্তি মন্ত্রণালয়,                                     গণপ্রজাতন্ত্রী বাংলাদেশ সরকার'])</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s"></div>

                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image017.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'লিয়াকত আলী লাকী'])</h3>
                                <p>@lang('header.member desc',['desc'=>'মহাপরিচালক,বাংলাদেশ শিল্পকলা একাডেমি'])</p>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s"></div>

                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image019.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'ফেরদৌস আহমেদ'])</h3>
                                <p>@lang('header.member desc',['desc'=>'চিত্রনায়ক'])</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image021.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'প্রীত রেজা'])</h3>
                                <p>@lang('header.member desc',['desc'=>'চিত্রগ্রাহক'])</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s"></div>

                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image023.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'রাহুল আনন্দ'])</h3>
                                <p>@lang('header.member desc',['desc'=>'সঙ্গীতশিল্পী ও অভিনয়শিল্পী'])</p>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s"></div>

                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{asset('member_images/image025.jpg')}}" alt=""/>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>@lang('header.member name',['name'=>'ত্রপা মজুমদার'])</h3>
                                <p>@lang('header.member desc',['desc'=>'নাট্যকর্মী'])</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
            {{--dynamic member--}}
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Other Members')</h2>
                        {{--<h2>@lang('header.Advisor member')</h2>--}}
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                @foreach($members as $member)
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{asset('member_images/'.$member->image)}}" alt=""/>
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>{{$member->name}}</h3>
                                    <p>{{$member->designation}}</p>

                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="{{route('single.member',$member->id)}}" class="btn btn-success">Full info</a>
                    </div>
                @endforeach
            </div>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <a href="{{route('members')}}" class="btn btn-primary">@lang('header.View All')</a>
                </div>
            </div>
        </div>

    </section>
    <!-- team-area end -->


    <!-- testmonial-area start -->
    <section id="testimonial" class="testmonial-area ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Testimonial')</h2>
                        <p>@lang('header.Testimonial desc')</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="test-active dotate-style">

                    @for($i = 0; $i<count($testimonials); $i+=2)
                        <div class="col-xs-12 wow fadeInLeft">
                            <div class="client-wrap fix">
                                <div class="client-info text-right">
                                    <h3>{{$testimonials[$i]->name}}</h3>
                                    <span>{{$testimonials[$i]->designation}}</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <p>{{str_limit($testimonials[$i]->desc,200)}}</p>
                                </div>
                                <div class="client-img pull-right">
                                    <img
                                            src="{{asset('testimonial_images/'.$testimonials[$i]->image)}}" alt=""/>
                                </div>
                            </div>
                        </div>

                        @if($testimonials[$i+1])
                            <div class="col-xs-12 wow fadeInRight">
                                <div class="client-wrap fix">
                                    <div class="client-info">
                                        <h3>{{$testimonials[$i+1]->name}}</h3>
                                        <span>{{$testimonials[$i+1]->designation}}</span>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <p>{{str_limit($testimonials[$i+1]->desc,200)}}</p>
                                    </div>
                                    <div class="client-img pull-left client-img2">
                                        <img
                                                src="{{asset('testimonial_images/'.$testimonials[$i+1]->image)}}"
                                                alt=""/>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <!-- testmonial-area end -->

    <!-- praller-area start -->
    <section class="prallex-area black-opacity parallax ptb-180 wow fadeInUp" data-speed="3"
             data-bg-image="{{asset('frontend/assets/images/ducs/image076.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="prallex-wrap text-center">
                        <h2><i class="fa fa-quote-left"></i>@lang('header.Dhaka University Cultural Club')<i
                                    class="fa fa-quote-right"></i></h2>
                        <span><i class="fa fa-long-arrow-left"></i>  <i class="fa fa-long-arrow-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- praller-area end -->

    <!-- blog-area start -->
    <section id="blog" class="blog-area ptb-140 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>@lang('header.Our Blog')</h2>
                        <p>@lang('header.Blog Desc')</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($blogPosts as $blogPost)
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <img src="{{asset('blog_images/'.$blogPost->image)}}" alt=""/>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">

                                </div>
                                <h3><a href="{{route('single.blog',$blogPost->id)}}">{{$blogPost->title}}</a></h3>
                                <p>{{str_limit($blogPost->desc,200)}}</p>
                                <a href="{{route('single.blog',$blogPost->id)}}"
                                   class="btn-style">@lang('header.Read More')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <a href="{{route('blog')}}" class="btn btn-primary">@lang('header.View All')</a>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area end -->

    <!-- newsletter-area start -->
    <section class="newsletter-area bg-img-1 black-opacity wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="newsletter-wrap">
                        <h2>@lang('header.Sign Up for DUCS')</h2> <a class="btn btn-primary"
                                                                     href="{{route('be.a.member')}}">@lang('header.Be a Member')</a><br>

                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="newsletter-form form-style">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area end -->

@endsection