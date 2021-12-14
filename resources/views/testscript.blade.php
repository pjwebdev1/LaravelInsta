@extends('layouts.app')

@section('content')

<div class="container">

<!-- using blade to pass in values to the view -->

<p>{{ $type }} - {{ $make }}</p>
@if ($price > 5000)
<p>This car is expensive!</p>
@elseif ($price < 5000) <p>This car is cheap!</p>
@else
<p>This car is fairly priced</p>
@endif

@unless ($make != 'Acura')
<p>This is not an Acura :(</p>
@endunless

<!-- php directive - regular php without using blade -->

@php
$myname = 'Peter';
echo($myname);
@endphp


<!-- using loops -->

@for($i = 0; $i < 5; $i++) <p>i is equal to {{ $i }}</p>
@endfor

<!-- passing through an array  -->


@foreach($pizzas as $pizza)
<p>{{ $loop->index}} - {{ $pizza['name'] }}
@if($loop->first)
<span> - this is the first one in the loop</span>
@endif
@if($loop->last)
<span> - this is the last one in the loop</span>
@endif
</p>
@endforeach

<!-- images  -->
<p><img src="img/weed.png" class="w-25" alt="Weed image"></p>


<!--  query parameters 
put this into the address bar
http://127.0.0.1:8000/testscript?someparam=Peter%20Peter%20Pumpkin%20Eater
-->

<p>{{ $someparam }}</p>

<!-- route parameters -->

</div>

@endsection