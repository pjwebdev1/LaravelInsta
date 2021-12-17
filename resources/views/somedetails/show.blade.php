@extends('layouts.app')

@section('content')

<div class="container">
Hello World
<p>{{ $testdata }}</p>
<p>{{ $testdata->model }}</p>

<a href="/testscript" class="btn btn-primary btn-lg" role="button" aria-pressed="true"><- Back</a>
</div>




@endsection