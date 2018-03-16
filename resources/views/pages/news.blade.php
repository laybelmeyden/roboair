@extends('layouts.master')

@section('content')
<section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
            @foreach ($nnews as $nnew)
						<div class="col-md-4 blog-padding-right">
						    <a href="/news{{ $nnew->id }}">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <img src="storage/{{ $nnew->img }}" class="img-responsive img_news text-center" alt="">
                                    <div class="post-overlay">
                                        <span class="uppercase"><p class="news_data">{{ $nnew->data}}</p></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold">{{ $nnew->title}}</h2>
                                    <p class="news_pretitle">{{ $nnew->pretitle }}</p>
                                    <p>Подробнее</p>
                                </div>
                            </div>
                            </a>
                        </div>
            @endforeach
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </section>
@endsection