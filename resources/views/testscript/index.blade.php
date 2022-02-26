@extends('layouts.app')

@section('content')

<div class="container">

	<!-- using blade to pass in values to the view -->
	<div class="h3">using blade to pass in values to the view</div>
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
		<div class="h3">php directive - regular php without using blade</div>
		@php
		$myname = 'Peter';
		echo($myname);
		@endphp


		<!-- using loops -->
		<div class="h3">using loops</div>
		@for($i = 0; $i < 5; $i++) <p>i is equal to {{ $i }}</p>
			@endfor

			<!-- passing through an array  -->

			<div class="h3">passing through an array</div>
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
			<div class="h3">images</div>
			<p><img src="img/weed.png" class="w-25" alt="Weed image"></p>


			<!--  query parameters 
put this into the address bar
http://127.0.0.1:8000/testscript?someparam=Peter%20Peter%20Pumpkin%20Eater
-->


			<!-- PHP blade comments -->
			{{-- comment here --}}




			<!-- Using a model to retrieve data from the database. The controller stores the data in an object and passes it to the view. The value of the data is displayed below. -->
			<div class="h3">Using a model to retrieve data from the database</div>
			@foreach($testscripts as $testscript)

			<p>{{ $testscript->make }} {{ $testscript->model }} = ${{ $testscript->price }}</p>

			@endforeach


			<!-- scss -->
			<div class="h3">scss</div>
			<div class="class1">
				Class1
				<div class="class2">
					Class1 Class2
				</div>
			</div>
			<div class="class2 ">
				Class2
			</div>
			<div class="female pb-5">
				female
			</div>
</div>



<div class="container">


	<try-component title='Some Title' button-text='test button' button-color='black'></try-component>


	<mytest-component title='Some Title'></mytest-component>
	
</div>



<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>
<p>a</p>

@endsection