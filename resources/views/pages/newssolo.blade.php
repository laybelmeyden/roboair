@extends('layouts.master')
@section('content')
<section class="page-header">
<div class="container">
<div class="row justify-content-md-center">
<div class="col-md-12">
<div class="breadcrumb-wrapper text-center">
<h2>{{$solo->title}}</h2>
<p><a href="/">Главная </a>/ {{$solo->title}}</p>
</div>
</div>
</div>
</div>
</section>
<div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
<div class="blog-comment">
<img src="storage/{{$solo->img}}" class="solo_news_img" alt="">
<h4>{{$solo->title}}</h4>
<p>{{$solo->data}}<br><br>{!! $solo->body !!}</p>
<p>{!! $solo->dopfunk !!}</p>

</div>
</div>
    </div>
</div>
@endsection