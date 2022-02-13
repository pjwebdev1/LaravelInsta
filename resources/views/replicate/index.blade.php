@extends('layouts.app')

@section('content')

<div class="container">
<h1>Index</h1>
<p>{{ $buyer }}</p>
<p>{{ $buyer->id }}</p>
<p>{{ $buyer->profile}}</p>
<p>{{ $buyer->posts}}</p>

<p>{{ $buyer->posts->last()->user_id}}</p>
<p>{{ $buyer->posts->firstWhere('id', '3')}}</p>
<p>{{ $buyer->posts->firstWhere('id', '>=', '3')}}</p>
<p>{{ $buyer->posts->firstWhere('id')}}</p>
<p>{{ $buyer->posts->get('user_id')}}</p>
<p>{{ $buyer->posts->chunk(2)}}</p>
<p>{{ $collection}}</p>
<p>{{ $buyer->posts->keys()}}</p>
<p>{{ $buyer->posts->keys()}}</p>

<div class="pb-5 mb-5"></div>


</div>
@endsection

