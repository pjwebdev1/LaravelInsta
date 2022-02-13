@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row h1 justify-content-center m-5">Add New Post</div>
	<form action="/p" enctype="multipart/form-data" method="post">@csrf
		<div class="row mb-3">
			<label for="caption" class="col-4 col-form-label text-md-right">{{ __('Caption') }}</label>
			<div class="col-6">
				<input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>
				@error('caption')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
		</div> 
		<div class="row mb-3">
			<label for="file" class="col-4 col-form-label text-md-right">{{ __('Image') }}</label>
			<div class="col-6">
				<input id="image" type="file" class="form-control" name="image" >
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
				<button class="btn btn-primary mx-auto">Add Post</button>
			</div>
		</div>
	</form>
</div>





@endsection