@extends('layouts.app')

@section('content')


<div class="container pt-5 d-flex justify-content-around align-items-center">
	<img src="/storage/{{$imageId->image}}" class="w-50">
	<div>
	<h1>{{$imageId->user->username}}</h1>
	<h2>{{$imageId->caption}}</h2>
	</div>
</div>


@endsection