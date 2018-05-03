@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Dashboard</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif


						@auth
								<div class="row">
									<div class="col-sm-4 mb-4">
										<img src="{{ '/storage/'.Auth::user()->profile->avatar_url }}" class="img-fluid" alt="user-avatar">
									</div>
									<div class="col-sm-8">
										<h4>{{ Auth::user()->name }}</h4>
										<p>{{ Auth::user()->profile->bio }}</p>
									</div>
								</div>

						@endauth
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
