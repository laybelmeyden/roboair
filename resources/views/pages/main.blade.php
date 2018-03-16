@extends('layouts.master')

@section('content')
<section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>ROBOSTART</h1>
                        <p>Ресурсный центр развития технических видов спорта и робототехники</p>
                        <a href="/about" class="btn btn-common">О Нас</a>
                    </div>
                    <img src="assets/images/freg1.png" class="slider-house" alt="slider image">
                    <img src="assets/images/freg2.png" class="slider-sun" alt="slider image">
                    <img src="assets/images/freg3.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
    </section>
    <!--/#home-slider-->
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

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Есть вопросы или предложения ?</h1>
                            <p>Напишите нам и мы обызательно с Вами свяжемся!</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="http://rusinnovations.com/#footer" target="blank" class="btn btn-common">Написать</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

   <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Meropriyatie</h1>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            @foreach ( $meros as $mero)
                            <div class="col-md-4">
                                <a href="/meropriyatiya{{ $mero->id }}">
								<div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="storage/{{ $mero->img }}" class="img-responsive img_mero" alt="">
                                        </div>
                                        <div class="social-profile">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <p>{{ $mero->data }}</p>
                                        <h2>{{ $mero->title }}</h2>
                                    </div>
                                </div>
								</a>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
            </div>
        </div>
    </section>
@endsection