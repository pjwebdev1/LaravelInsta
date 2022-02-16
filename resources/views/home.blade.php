@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Dashboard') }}</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					{{ __('You are logged in!') }}
				</div>
			</div>
		</div>
		<div class="col-md-8 pt-4">
			<div class="card">
				<div class="card-header">{{ __('Sites') }}</div>

				<div class="card-body">
				<p><a href="{{ route('welcome') }}">Welcome</a></p>
				<p><a href="{{ route('home.index') }}">Home</a></p>
				<p><a href="{{ route('profile.index', '1') }}">Profile page with ID 1</a></p>
				<p><a href="{{ route('profile.index', '2') }}">Profile page with ID 2</a></p>
				<p><a href="{{ route('profile.index', '3') }}">Profile page with ID 3</a></p>
				<p><a href="{{ route('post.create') }}">Create Post</a></p>
				<p><a href="{{ route('testscript.index') }}">Testscript index page</a></p>
				<p><a href="{{ route('testscript.create') }}">Testscript create page</a></p>
				<p><a href="{{ route('somedetails.show', '1') }}">Some Details with ID 1</a></p>
				<p><a href="{{ route('replicate.index', '2') }}">Replicate index page with ID 2</a></p>
				<p><a href="{{ route('replicate.create') }}">Replicate create page</a></p>
				
				<!-- <p><a href="/profile">Profile</a></p> -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection