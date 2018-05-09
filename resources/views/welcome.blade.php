@extends('layouts.base')
@section('content')
	<div class="hero is-medium bg-has-white">
		<div class="hero-head">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand" href="/">{{ config('app.name') }}</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent2">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="#">Feature <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Integrations</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Document</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="hero-body">
			<div class="container">
				<h1 class="title">No more, just one account</h1>
				<h2 class="subtitle">
					Confuse with lots of accounts and maintain difficulty? why not try me.
				</h2>
				<p>
					<a href="/login" class="btn btn-outline-dark btn-lg">Get started</a>
				</p>
			</div>

		</div>
		<div class="hero-foot" style="display: none">
			<div class="container">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="#">Overview</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Elements</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Hot</a>
					</li>
				</ul>
			</div>

		</div>
	</div>


	<section class="introduce py-5">
		<div class="container">
			<div class="text-center">
				<h1 class="title mb-5">A better way to work with common user</h1>
				<h2 class="subtitle">
					Common user bring your teams focus on service logic and free your imagination, all of your user data
					and operation is ready for your by our service, such as authentication, login, register ...
				</h2>
			</div>
		</div>
	</section>

	<section class="feature py-5 bg-white">
		<div class="text-center">
			<h1 class="title mb-5">Features</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 mb-4">
					<div class="text-center">
						<i class="fa fa-user-plus mb-3" style="font-size: 3rem;"></i>
						<h5>Authentication</h5>
						<p>Easy authentication your applications</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-4">
					<div class="text-center">
						<i class="fa fa-rocket mb-3" style="font-size: 3rem;"></i>
						<h5>Modern</h5>
						<p>With latest modern technique and framework</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-4">
					<div class="text-center">
						<i class="fa fa-user-secret mb-3" style="font-size: 3rem;"></i>
						<h5>Security</h5>
						<p>By separated your user data security</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-4">
					<div class="text-center">
						<i class="fa fa-clock-o mb-3" style="font-size: 3rem;"></i>
						<h5>Saves Times</h5>
						<p>Give you more time focus on business logic</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="latest-news py-5">
		<div class="text-center">
			<h1 class="title mb-5">Latest news</h1>
		</div>
		<div class="container">
			<div class="news-slick">
				<div class="news-card">
					<div class="news-card__space bg-white">
						<img src="https://dummyimage.com/600x400&text=Rapid+storage" alt="" class="news-card__img img-fluid w-100">
						<div class="news-card__content">
							<div class="news-card__time small mb-2">2018,12,12</div>
							<a href="#" class="news-card__title mb-2">Rapid storage modern toolsRapid storage modern toolsRapid storage modern tools</a>
							<div class="news-card__author small mb-4">
								Posted <a href="#">Cateogry</a> by <a href="#">buuug7</a>
							</div>
							<div class="news-card__description text-muted">
								Magni neque nihil nulla quae quaerat quasi quisquam quos reiciendis repudiandae saepe sed tempore vel voluptas voluptatem voluptates. Modi, molestiae, molestias.
							</div>
						</div>
					</div>
				</div>
				<div class="news-card">
					<div class="news-card__space bg-white">
						<img src="https://dummyimage.com/600x400&text=Twice+dobule" alt="" class="news-card__img img-fluid w-100">
						<div class="news-card__content">
							<div class="news-card__time small mb-2">2018,12,12</div>
							<a href="#" class="news-card__title mb-2">Double twice your skills</a>
							<div class="news-card__author small mb-4">
								Posted <a href="#">Cateogry</a> by <a href="#">buuug7</a>
							</div>
							<div class="news-card__description text-muted">
								Accusantium beatae cum deserunt dolores doloribus eveniet fugiat iste natus neque repellendus. Beatae, cupiditate.
							</div>
						</div>
					</div>
				</div>
				<div class="news-card">
					<div class="news-card__space bg-white">
						<img src="https://dummyimage.com/600x400&text=Simple+USE" alt="" class="news-card__img img-fluid w-100">
						<div class="news-card__content">
							<div class="news-card__time small mb-2">2018,12,12</div>
							<a href="#" class="news-card__title mb-2">As possible as simple</a>
							<div class="news-card__author small mb-4">
								Posted <a href="#">Cateogry</a> by <a href="#">buuug7</a>
							</div>
							<div class="news-card__description text-muted">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis cumque dolorem ipsam nesciunt nulla?
							</div>
						</div>
					</div>
				</div>
				<div class="news-card">
					<div class="news-card__space bg-white">
						<img src="https://dummyimage.com/600x400&text=Keep+Balance" alt="" class="news-card__img img-fluid w-100">
						<div class="news-card__content">
							<div class="news-card__time small mb-2">2018,12,12</div>
							<a href="#" class="news-card__title mb-2">Keep yourself balanced</a>
							<div class="news-card__author small mb-4">
								Posted <a href="#">Cateogry</a> by <a href="#">buuug7</a>
							</div>
							<div class="news-card__description text-muted">
								Error est excepturi exercitationem explicabo, harum id illo iste itaque magni non numquam odio officia. Eum expedita harum praesentium quidem rerum!
							</div>
						</div>
					</div>
				</div>
				<div class="news-card">
					<div class="news-card__space bg-white">
						<img src="https://dummyimage.com/600x400&text=Future+mind" alt="" class="news-card__img img-fluid w-100">
						<div class="news-card__content">
							<div class="news-card__time small mb-2">2018,12,12</div>
							<a href="#" class="news-card__title mb-2">Future need more mind</a>
							<div class="news-card__author small mb-4">
								Posted <a href="#">Cateogry</a> by <a href="#">buuug7</a>
							</div>
							<div class="news-card__description text-muted">
								Maxime minus mollitia nam, praesentium qui reprehenderit vero. Ab aliquid asperiores blanditiis.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<p class="text-center">
				<strong>common user</strong> by <a href="#">buuug7</a>.The source code is licenced <a href="#">MIT</a>.
			</p>
		</div>
	</footer>
@stop


@push('styles')
	<link rel="stylesheet" href="https://unpkg.com/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="https://unpkg.com/slick-carousel@1.8.1/slick/slick-theme.css">
	<style>
		.slick-dots {
			bottom: -50px;
		}
	</style>
@endpush


@push('scripts')
	<script src="https://unpkg.com/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		$(document).ready(function () {
          $('.news-slick').slick({
            slidesToShow: 4,
            arrows: false,
            dots: true,
            easing: 'ease-in',
            autoplay:true,
            responsive: [{
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
              }
            }, {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              }
            }, {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
              }
            }]
          });
        });


	</script>
@endpush

