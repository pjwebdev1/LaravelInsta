@extends('layouts.app')

@section('content')

<div class="container">
Hello World
<p>{{ $testdata }}</p>
<p>{{ $testdata->make }} {{ $testdata->model }} - ${{ $testdata->price }} </p>
<ul>
	@foreach($testdata->details as $detail)
	<li>{{ $detail }}</li>
	@endforeach
</ul>

<form action="/somedetails/{{ $testdata->id }}" method="POST">
	@csrf
	@method('DELETE')
  <div class="mb-3 p-1">
		<a href="/testscript" class="btn btn-primary btn-lg mt-3" role="button" aria-pressed="true"><- Back</a>
		<button type="submit" class="btn btn-danger btn-lg mt-3 ms-2">Delete</button>
  </div>
</form>
</div>
@endsection