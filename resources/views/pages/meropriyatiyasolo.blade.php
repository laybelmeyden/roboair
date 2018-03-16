@extends('layouts.master')
@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">{{$solo->title}}</h1>
                        </div>                                                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section class="solo_news_sec">
        <div class="container">
            <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb text-center">
                                    <img src="storage/{{$solo->img}}" class="solo_news_img" alt="">
                                </div>
                                <div class="post-content overflow">
                                    <h3 class="post-author">{{$solo->data}}</h3>
                                    <p>{!! $solo->body !!}</p>
                                </div>
                                <div>
                                {!! $solo->dopfunk !!}
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@endsection