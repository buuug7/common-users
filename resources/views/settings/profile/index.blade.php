@extends('layouts.app')
@section('content')

	<h2 class="my-5">Profile</h2>

	<h4>Avatar</h4>
	<image-upload
			default-avatar={{ '/storage/'.Auth::user()->profile->avatar_url }}
					:allowed-mime-types='["image/jpg","image/jpeg","image/png"]'
			:cropped-width="200"
			:cropped-height="200"
	>

	</image-upload>
@stop

