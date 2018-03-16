@extends('layouts.master')
@section('content')
<section id="team">
        <div class="container">
            <div class="row">
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