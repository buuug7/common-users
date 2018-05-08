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
					<a href="#" class="btn btn-outline-dark btn-lg">Get started</a>
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


	<div class="container mt-5">
		<h1 class="title">然而就如我们家乡的</h1>
		<h2 class="subtitle">
			亲爱的主编同志，我想给您描绘一下那些个挖我们墙脚的妇女是何等的没有觉悟。您遍访国内战争的各条战线，写了许多报道，我相信您不会忽略一个名叫法斯托夫的民风刁恶的火车站，这个火车站位于某个遥远的国度的某个鲜为人知的地方，我当然去过那里，喝过私酿啤酒，用以润湿唇髭，但没有咽下肚去。关于上述车站，有许多东西可写，然而就如我们家乡的俗话所说，别把上帝拉的屎搬过来当宝贝。所以我只写给你看我亲眼见到的。
		</h2>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="text-center">
				<strong>common user</strong> by <a href="#">buuug7</a>.The source code is licenced <a href="#">MIT</a>.
			</p>
		</div>
	</footer>

@stop

