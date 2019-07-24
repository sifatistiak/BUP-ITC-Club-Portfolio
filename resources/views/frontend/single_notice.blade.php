@extends('layouts.frontend')
@section('title','Blog')

@section('content')

<!-- blog-details-area start -->
<section id="blog" class="blog-details-area ptb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="blog-details-wrap">

                    <div class="blog-details-content">
                        <h3>{{$notice->title}}</h3>
                        <p> {{$notice->desc}}</p>
                        <p>@lang('header.Date'): {{$notice->date->format('d M Y') }}</p>
                        <p>@lang('header.Posted By')   :  {{$notice->posted_by}}</p>
                        <p>@lang('header.Notice From') :  {{$notice->notice_from}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- blog-details-area end -->
@endsection