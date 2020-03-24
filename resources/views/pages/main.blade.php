@extends('layouts.master')

@section('content')
<!-- Hero Area Start -->
<div id="hero-area" class="hero-area-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="contents text-center">
          <h2 class="head-title wow fadeInUp">Сибирский робостарт</h2>
          <!-- <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a href="#services" class="btn btn-common">Explore</a>
                </div> -->
        </div>
        <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
          <img class="img-fluid" src="assets/img/123123.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero Area End -->
<!-- Feature Section Start -->
<div id="feature">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="text-wrapper">
          <div>
            <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">Наши цели:</h2>
            <!-- <p class="mb-4">A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.</p> -->
            <!-- <a href="#" class="btn btn-common">More About Us</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
        <div class="feature-thumb">
          <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="icon">
              <i class="lni-microphone"></i>
            </div>
            <div class="feature-content">
              <h3>Цель №1:</h3>
              <p>Популяризация и вовлечение детей и молодежи в сферу робототехники и IT</p>
            </div>
          </div>
          <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="icon">
              <i class="lni-users"></i>
            </div>
            <div class="feature-content">
              <h3>Цель №2:</h3>
              <p>Профориентация старшеклассников и молодежи в малых городах Омской области</p>
            </div>
          </div>
          <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="icon">
              <i class="lni-medall-alt"></i>
            </div>
            <div class="feature-content">
              <h3>Цель №3:</h3>
              <p>Развитие системы дополнительного образования детей и молодежи по направлению "робототехника"</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature Section End -->

<!-- Services Section Start -->
<section id="services" class="section-padding bg-gray">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Площадки проведения</h2>
      <!-- <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p> -->
    </div>
    <div class="row">
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
          <!-- <div class="icon">
                <i class="lni-pencil"></i>
              </div> -->
          <div class="services-content">
            <h3><a>Исилькуль</a></h3>
            <p>МБОУ «Исилькульский лицей» <br>28 Апреля</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
          <div class="services-content">
            <h3><a>Калачинск</a></h3>
            <p>БОУ г. Калачинска Омской области «Лицей» 29 Апреля</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
          <div class="services-content">
            <h3><a>Тара</a></h3>
            <p>БОУ «Тарская СОШ №5» <br>30 Апреля</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section-header text-center" style="padding-top:90px;">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Регистрация</h2>
      <p>Заполните форму ниже, чтобы принять участие</p>
    </div>
    <form method="POST" action="/contact_f">
      <div class="row">
        {{ csrf_field() }}
        <input type="email" class="form-control hidden" id="name" name="email" value="test@test.ru">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="Ваше имя" id="name_4" class="form-control" name="name_4" required data-error="введите ваше имя">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="Ваша фамилия" id="name_5" class="form-control" name="name_5" required data-error="введите Вашу фамилию">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="number" placeholder="Ваш возраст" id="name_6" class="form-control" name="name_6" required data-error="введите ваш возраст">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="Город участия" id="name_7" class="form-control" name="name_7" required data-error="введите город участия">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" placeholder="Место учебы" id="name_8" class="form-control" name="name_8" required data-error="введите место учебы">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12 text-center">
        <div class="submit-button">
          <button class="btn btn-common" id="form-submit" type="submit">Отправить</button>
        </div>
        </div>
    </form>
  </div>
  </div>
</section>
<!-- Services Section End -->





<!-- Blog Section -->
<section id="blog" class="section-padding">
  <!-- Container Starts -->
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Последние новости</h2>
    </div>
    <div class="row">
      @foreach ($nnews as $nnew)
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
        <!-- Blog Item Starts -->
        <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
          <div class="blog-item-img">
            <a href="/news{{ $nnew->id }}">
              <img src="storage/{{ $nnew->img }}" alt="" class="img-responsive">
            </a>
          </div>
          <div class="blog-item-text">
            <h3 class="news_h3">
              <a href="/news{{ $nnew->id }}">{{ $nnew->title}}</a>
            </h3>
            <p class="news_p">
              {{ $nnew->data}}
              {{ $nnew->pretitle }}
            </p>
            <a href="/news{{ $nnew->id }}" class="btn btn-common btn-rm">читать</a>
          </div>
        </div>
        <!-- Blog Item Wrapper Ends-->
      </div>
      @endforeach
    </div>
  </div>
</section>
<div id="mero">
  <section id="blog" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Мероприятия</h2>
      </div>
      <div class="row">
        @foreach ($meros as $mero)
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
          <!-- Blog Item Starts -->
          <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
            <div class="blog-item-img">
              <a href="/meropriyatiya{{ $mero->id }}">
                <img src="storage/{{ $mero->img }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="blog-item-text">
              <h3 class="news_h3">
                <a href="/meropriyatiya{{ $mero->id }}">{{ $nnew->title}}</a>
              </h3>
              <p class="news_p">
                {{ $mero->data }}
                {{ $mero->title }}
              </p>
              <a href="/meropriyatiya{{ $mero->id }}" class="btn btn-common btn-rm">читать</a>
            </div>
          </div>
          <!-- Blog Item Wrapper Ends-->
        </div>
        @endforeach
      </div>
    </div>
  </section>
</div>
<!-- blog Section End -->

<!-- Clients Section Start -->
<div id="clients" class="section-padding bg-gray">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">партнеры</h2>
    </div>
    <div class="row text-align-">
      <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="client-item-wrapper">
          <img class="img-fluid" src="assets/img/003.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
        <div class="client-item-wrapper">
          <img class="img-fluid" src="assets/img/logo_ASI.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
        <div class="client-item-wrapper">
          <img class="img-fluid" src="assets/img/logo_120905.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
        <div class="client-item-wrapper">
          <img class="img-fluid" src="assets/img/xLogo.png.pagespeed.ic.OMzdoh2sWs.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Clients Section End -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
  <i class="lni-arrow-up"></i>
</a>

<!-- Preloader -->
<div id="preloader">
  <div class="loader" id="loader-1"></div>
</div>
@endsection