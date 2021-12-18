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

<a href="/testscript" class="btn btn-primary btn-lg" role="button" aria-pressed="true"><- Back</a>
</div>




@endsection