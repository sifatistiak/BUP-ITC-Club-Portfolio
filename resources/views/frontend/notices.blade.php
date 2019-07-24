@extends('layouts.frontend')
@section('title','Blog')
@section('content')

<!-- .Blog-area start -->
<section class="blog-area ptb-140 bg-1">
    <div class="container">
        <div class="row">
            @foreach($notices as $notice)
            <div class="col-md-4 col-sm-6 col-xs-12 col">
                <div class="blog-wrap mb-30">
                    <div class="blog-img">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">

                        </div>
                        <h3><a href="{{route('single.notice',$notice->id)}}">{{$notice->title}}</a></h3>
                        <p>{{str_limit($notice->desc,500)}}</p>
                        <a href="{{route('single.notice',$notice->id)}}" class="btn-style">Read More</a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3">

        {{ $notices->links() }}
            </div>
        </div>

    </div>
</section>
<!-- .Blog-area end -->

@endsection
