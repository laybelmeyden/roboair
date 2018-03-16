@extends('layouts.master')
@section('content')
<div class="container">
			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<li>
							<figure>
								<img src="storage/{{$solo->images}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img1}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img2}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img3}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img4}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img5}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img6}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img7}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img8}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img9}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
						<li>
							<figure>
								<img src="storage/{{$solo->img10}}" class="photosolo_img" onerror = "this.style.display = 'none'"/>
							</figure>
						</li>
					</ul>
				</section><!-- // grid-wrap -->
				<section class="slideshow">
					<ul>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->images}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img1}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img2}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img3}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img4}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img5}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img6}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img7}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img8}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img9}}"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>{{$solo->title}}</h3>
									</figcaption>
								<img src="storage/{{$solo->img10}}"/>
							</figure>
						</li>
					</ul>
					<nav>
						<span class="icon nav-prev" style="display:none;"></span>
						<span class="icon nav-next" style="display:none;"></span>
						<span class="icon nav-close text-center"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
					</nav>
				</section><!-- // slideshow -->
			</div><!-- // grid-gallery -->
		</div>
@endsection