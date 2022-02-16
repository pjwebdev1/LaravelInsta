@extends('layouts.app')

@section('content')


<div class="container pt-5 d-flex">
	<img src="/storage/{{$imageId->image}}" class="w-75">
	<div class="d-flex flex-column  w-100">
		<div class="d-flex align-items-center">
			<img src="{{ $imageId->user->profile->profileImage()}}" class="rounded-circle" style="height: 4rem;">
			<a href="/profile/{{ $imageId->user->id}}" class="ps-4 fw-bold text-dark">{{$imageId->user->username}}</a>
			<button type="button" class="btn btn-primary btn-sm ms-3">Follow</button>
		</div>
		<hr class="w-100">
		<div>
		<a href="/profile/{{ $imageId->user->id}}" class="ps-4 fw-bold text-dark">{{$imageId->user->username}}</a><span class="ps-3">{{$imageId->user->profile->description}}</span>
		</div>
	</div>
</div>

@endsection