@extends('layouts.app')
@section('content')

	<image-upload
			default-avatar={{ '/storage/'.Auth::user()->profile->avatar_url }}
			:allowed-mime-types='["image/jpg","image/jpeg","image/png"]'
			:cropped-width="200"
			:cropped-height="200"
	>

	</image-upload>
@stop

