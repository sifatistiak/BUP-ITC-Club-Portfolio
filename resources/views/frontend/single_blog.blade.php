@extends('layouts.frontend')
@section('title','Blog')

@section('content')

<!-- blog-details-area start -->
<section id="blog" class="blog-details-area ptb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="blog-details-wrap">
                    <div class="blog-details-img">
                        <img src="{{asset('single_blog_images/'.$blogPost->image)}}" alt="">
                    </div>
                    <div class="blog-details-content">
                        <h3>{{$blogPost->title}}</h3>
                        <p> {{$blogPost->desc}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col">
                <aside class="right-sidebar">

                    <div class="related-post mb-30">
                        <h3 class="sidebar-title">Related Postt</h3>
                        <ul>
                            @foreach($blogPosts as $blog)
                            <li class="related-post-items">
                                <div class="post-img">
                                    <img height="50px"  width="80px" src="{{asset('blog_images/'.$blog->image)}}" alt="">
                                </div>
                                <div class="post-info">
                                    <a href="{{route('single.blog',$blog->id)}}">{{$blog->title}}</a>
                                    <p>{{$blog->created_at->toFormattedDateString()}}</p>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog-details-area end -->
@endsection