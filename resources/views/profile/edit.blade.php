@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row h1 justify-content-center m-5">Update Profile</div>
	<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
		@csrf
		@method('PATCH')
		<div class="row mb-3">
			<label for="title" class="col-4 col-form-label text-md-right">Title</label>
			<div class="col-6">
				<input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="Title" autofocus>
				@error('title')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
		</div>
		<div class="row mb-3">
			<label for="description" class="col-4 col-form-label text-md-right">Description</label>
			<div class="col-6">
				<input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="Description" autofocus>
				@error('description')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
		</div>
		<div class="row mb-3">
			<label for="url" class="col-4 col-form-label text-md-right">Url</label>
			<div class="col-6">
				<input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url  }}" autocomplete="url" autofocus>
				@error('url')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
		</div>
		<div class="row mb-3">
			<label for="image" class="col-4 col-form-label text-md-right">Profile Image</label>
			<div class="col-6">
				<input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
				@error('image')
				<!-- <span class="invalid-feedback" role="alert"> -->
				<strong>{{ $message }}</strong>
				<!-- </span> -->
				@enderror
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-4"></div>
			<div class="col-6">
				<button class="btn btn-primary mx-auto">Save Profile</button>
			</div>
		</div>
	</form>
</div>





@endsection