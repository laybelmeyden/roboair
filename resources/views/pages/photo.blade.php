@extends('layouts.master')
@section('content')
		<div class="container">
		<div class="row">
		    @foreach ($gallers as $galler)
		<div class="col-md-4">
		<a href="/photo{{ $galler->id }}">
		  <div class="card">
          <img class="card-img-top img_card_photo" src="storage/{{ $galler->preimg }}" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">{{ $galler->title }}</h4>
          </div>
        </div>
		</a>
		</div>
		@endforeach
		</div>
		</div>
@endsection