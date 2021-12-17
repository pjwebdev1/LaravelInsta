@extends('layouts.app')

@section('content')

<div class="container">
Hello World
<p>{{ $testdata }}</p>
<p>{{ $testdata->model }}</p>
</div>


@endsection