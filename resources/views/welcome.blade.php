

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
		<div class="hero-foot">
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


	<div class="container my-5">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="card text-center">
					<div class="card-header">
						Featured
					</div>
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					<div class="card-footer text-muted">
						2 days ago
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card text-center">
					<div class="card-header">
						Featured
					</div>
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					<div class="card-footer text-muted">
						2 days ago
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card text-center">
					<div class="card-header">
						Featured
					</div>
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					<div class="card-footer text-muted">
						2 days ago
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card text-center">
					<div class="card-header">
						Featured
					</div>
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					<div class="card-footer text-muted">
						2 days ago
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="text-center">
				<strong>common user</strong> by <a href="#">buuug7</a>.The source code is licenced <a href="#">MIT</a>.
			</p>
		</div>
	</footer>

@stop

