@extends('layouts.frontend')
@section('title','Home')
@section('content')
    <!-- slider area start -->
    <section class="slider-area">
        <div class="slider-active2 slider-next-prev-style">
            <div class="slider-items">
                <img src="{{asset('frontend/assets/images/slider/4.jpg')}}" alt="" class="slider">
                <div class="slider-content text-center">
                    <div class="table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                                        <h2>Dhaka University Cultural Club</h2>
                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.</p>
                                        <ul>
                                            <li><a href="{{route('be.a.member')}}">Be a Member</a></li>
                                            <li><a href="#">Get Started</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-items">
                <img src="{{asset('frontend/assets/images/slider/3.jpg')}}" alt="" class="slider">
                <div class="slider-content text-center">
                    <div class="table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                                        <h2>Dhaka University Cultural Club</h2>
                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.</p>
                                        <ul>
                                            <li><a href="{{route('be.a.member')}}">Be a Member</li>
                                            <li><a href="#">Get Started</a></li>
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
                <div class="col-md-6 col-xs-12 wow fadeInLeft">
                    <div class="about-img black-opacity">
                        <img src="{{asset('frontend/assets/images/about.jpg')}}'" alt=""/>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wow fadeInRight">
                    <div class="about-wrap">
                        <h2>who we are</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.randomised words which don't look even slightly believable.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised. by injected humour, or
                            randomised.</p>
                        <ul>
                            <li>There are many variations of passages</li>
                            <li>By injected humour or randomised.</li>
                            <li>the majority have suffered alteration</li>
                            <li>majority have suffered alteration</li>
                            <li>variations of passages of Lorem Ipsum</li>
                            <li>of passages of Lorem Ipsum</li>
                            <li>many variations of passages.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->

    <!-- .event-area start -->
    <section id="event" class="service-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>Our Upcoming Events</h2>
                        <p>the majority have suffered alteration in some form, by injected humour, or randomised. by
                            injected humour, or randomised.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $numberOfData = count($achievements);
                    if($numberOfData > 3){
                    $numberOfData = 3;
                    }
                @endphp
                @for($i = 0; $i<$numberOfData; $i++)
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="{{asset('event_images/'.$events[$i]->image)}}" alt=""/>
                            </div>
                            <div class="service-content">
                                <h3>{{$events[$i]->title}}</h3>
                                <p>{{str_limit($events[$i]->desc,150)}}</p>
                                <a href="{{route('single.event',$events[$i]->id)}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endfor
                <a href="{{route('events')}}" class="btn btn-primary">View All</a>
            </div>
        </div>
    </section>
    <!-- .event-area end -->
    <!-- fanfact-area start -->
    <section class="fanfact-area parallax black-opacity" data-speed="5"
             data-bg-image="{{asset('frontend/assets/images/bg/1.jpg')}}">
        <div class="table">
            <div class="table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay=".1s">
                            <div class="fanfact-wrap">
                                <h2 class="counter">2157</h2>
                                <p>Web Design</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="fanfact-wrap">
                                <h2 class="counter">15445</h2>
                                <p>Web Development</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="fanfact-wrap">
                                <h2 class="counter">145</h2>
                                <p>UX/UI Design</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="fanfact-wrap">
                                <h2 class="counter">1200</h2>
                                <p>Photoshop</p>
                            </div>
                        </div>
                    </div>
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
                        <h2>Our Achievement</h2>
                        <p>the majority have suffered alteration in some form, by injected humour, or randomised. by
                            injected humour, or randomised.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="portfolio-menu text-center">
                        <button class="active" data-filter="*">Show All</button>
                        <button data-filter=".website">WebSite</button>
                        <button data-filter=".responsiv">Responsiv</button>
                        <button data-filter=".minimal">Minimal</button>
                        <button data-filter=".clean">Clean</button>
                    </div>
                </div>
            </div>
            <div class="row grid">
                {{--6 data in tahe grid--}}
                @php
                    $numberOfData = count($achievements);
                    if($numberOfData > 6){
                    $numberOfData = 6;
                    }

                @endphp
                @for($i = 0; $i<$numberOfData; $i++)
                    <div class="col-md-4 portfolio website col-sm-6 col-xs-12 col">
                        <div class="portfolio-wrap">
                            <div class="overlay">
                                <a href="{{route('single.achievement',$achievements[$i]->id)}}">
                                    <i class="fa fa-link"></i>
                                </a>
                                <h3>{{$achievements[$i]->title}}</h3>
                                <p>{{str_limit($achievements[$i]->desc,50)}}</p>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('achievement_images/'.$achievements[$i]->image)}}" alt=""/>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- porftolio-area end -->

    <!-- featured-area start -->
    <div class="featured-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>Special features</h2>
                        <p>the majority have suffered alteration in some form, by injected humour, or randomised. by
                            injected humour, or randomised.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="featured-wrap">
                        <ul>
                            <li class="wow fadeInLeft" data-wow-delay=".1s">
                                <h3>2013</h3>
                                <div class="featured-content">
                                    <div class="featured-img">
                                        <img src="{{asset('frontend/assets/images/featured/1.jpg')}}" alt=""/>
                                    </div>
                                    <div class="featured-info">
                                        <h4>Web Design</h4>
                                        <p>Alteration in some form, by injected humour, or randomised. by injected
                                            humour, or randomised.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay=".5s">
                                <h3>2017</h3>
                                <div class="featured-content">
                                    <div class="featured-img">
                                        <img src="{{asset('frontend/assets/images/featured/5.jpg')}}" alt=""/>
                                    </div>
                                    <div class="featured-info">
                                        <h4>UX/UI Design</h4>
                                        <p>Alteration in some form, by injected humour, or randomised. by injected
                                            humour, or randomised.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h3>end</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured-area end -->

    <!-- video-area start -->
    <section class="video-area  parallax black-opacity wow fadeInUp" data-speed="5"
             data-bg-image="{{asset('frontend/assets/images/bg/2.jpg')}}">
        <h2 class="hidden">Video area</h2>
        <div class="table">
            <div class="table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="video-wrap text-center">
                                <a href="https://www.youtube.com/watch?v=S7wCAquf9Us" class="video-popup">
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
                        <h2>Members</h2>
                        <p>The majority have suffered alteration in some form, by injected humour, or randomised. by
                            injected humour, or randomised.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $numberOfData = count($achievements);
                    if($numberOfData > 4){
                    $numberOfData = 4;
                    }

                @endphp
                @for($i = 0; $i<$numberOfData; $i++)
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{asset('member_images/'.$members[$i]->image)}}" alt=""/>
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>{{$members[$i]->name}}</h3>
                                    <p>{{str_limit($members[$i]->biography)}}</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('single.member',$members[$i]->id)}}" class="btn btn-success">Full info</a>
                    </div>
                @endfor
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
                        <h2>Testimonial</h2>
                        <p>The majority have suffered alteration in some form, by injected humour, or randomised. by
                            injected humour, or randomised.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="test-active dotate-style">
                    @php
                        $numberOfData = count($achievements);
                        if($numberOfData > 4){
                        $numberOfData = 4;
                        }

                    @endphp
                    @for($i = 0; $i<$numberOfData; $i+=2)
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
                                    <img height="50px" width="60px" src="{{asset('testimonial_images/'.$testimonials[$i]->image)}}" alt=""/>
                                </div>
                            </div>
                        </div>

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
                                    <img height="50px" width="60px" src="{{asset('testimonial_images/'.$testimonials[$i+1]->image)}}" alt=""/>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <!-- testmonial-area end -->

    <!-- praller-area start -->
    <section class="prallex-area black-opacity parallax ptb-180 wow fadeInUp" data-speed="3"
             data-bg-image="{{asset('frontend/assets/images/bg/3.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="prallex-wrap text-center">
                        <h2><i class="fa fa-quote-left"></i>Keep away from people who try to belittle your ambitions.
                            Small peol always do that.<i class="fa fa-quote-right"></i></h2>
                        <span><i class="fa fa-long-arrow-left"></i>  Brayden Shar <i class="fa fa-long-arrow-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- praller-area end -->

    <!-- blog-area start -->
    <section class="blog-area ptb-140 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>Our Creativ Bolg</h2>
                        <p>The majority have suffered alteration in some form, by injected humour, or randomised. by
                            injected humour, or randomised.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog/1.jpg')}}" alt=""/>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comment"></i> 5 Comment</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i> 5 Love</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog.html">majority have suffered</a></h3>
                            <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy</p>
                            <a href="blog.html" class="btn-style">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog/2.jpg')}}" alt=""/>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comment"></i> 5 Comment</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i> 5 Love</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog.html">majority have suffered</a></h3>
                            <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy</p>
                            <a href="blog.html" class="btn-style">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog/3.jpg')}}" alt=""/>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comment"></i> 5 Comment</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i> 5 Love</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog.html">majority have suffered</a></h3>
                            <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy</p>
                            <a href="blog.html" class="btn-style">Read More</a>
                        </div>
                    </div>
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
                        <h2>Sign Up for Newsletter</h2>
                        <p>We’ll be with you on every walk of life on how to identify new opportunities.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="newsletter-form form-style">
                        <form action="#">
                            <input type="email" placeholder="Email"/>
                            <button class="btn-style">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area end -->

@endsection