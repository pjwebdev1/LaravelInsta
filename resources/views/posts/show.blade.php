@extends('layouts.app')

@section('content')

<div class="container pt-5 d-flex">
	<img src="/storage/{{$postId->image}}" class="w-75">
	<div class="d-flex flex-column  w-100">
		<div class="d-flex align-items-center">
			<img src="{{ $postId->user->profile->profileImage()}}" class="rounded-circle" style="height: 4rem;">
			<a href="/profile/{{ $postId->user->id}}" class="ps-4 fw-bold text-dark"> {{$postId->user->username}}</a>
			<button type="button" class="btn btn-primary btn-sm ms-3">Follow</button>
		</div>
		<hr class="w-100">
		<div>
		<a href="/profile/{{ $postId->user->id}}" class="ps-4 fw-bold text-dark">{{$postId->user->username}}</a><span class="ps-3">{{$postId->user->profile->description}}</span>
		</div>
	</div>
</div>
@endsection