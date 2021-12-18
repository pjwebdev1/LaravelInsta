@extends('layouts.app')

@section('content')

<div class="container">

	<div class="h1">Create page is working</div>



	<form action="/testscript" method="POST">
		@csrf
		<!-- takes you back to home screen in the event of cross site request forgery -->
		<div class="mb-3">
			<label for="makeofcar" class="form-label">Make</label>
			<input type="text" class="form-control" id="makeofcar" name="makeofcar" aria-describedby="make of car">
			<div id="makeofcarEntry" class="form-text">Please enter the make of your car.</div>
		</div>
		<div class="mb-3">
			<label for="modelofcar" class="form-label">Make</label>
			<input type="text" class="form-control" id="modelofcar" name="modelofcar" aria-describedby="model of car">
			<div id="modelofcarEntry" class="form-text">Please enter the model of your car.</div>
		</div>
		<div class="mb-3">
			<label for="priceofcar" class="form-label">Price</label>
			<input type="number" class="form-control" id="priceofcar" name="priceofcar" aria-describedby="price of car">
			<div id="priceofcarEntry" class="form-text">Please enter the price year of your car.</div>
		</div>
		<fieldset class="mb-3">
			<div class="form-check form-switch">
				<input class="form-check-input" type="checkbox" id="sunroof" name="details[]" value="sunroof">
				<label class="form-check-label" for="sunroof">Sunroof</label>
			</div>
			<div class="form-check form-switch">
				<input class="form-check-input" type="checkbox" id="rims" name="details[]" value="rims">
				<label class="form-check-label" for="rims">Rims</label>
			</div>
			<div class="form-check form-switch">
				<input class="form-check-input" type="checkbox" id="nos" name="details[]" value="nos">
				<label class="form-check-label" for="nos">NOS</label>
			</div>
			<div class="form-check form-switch">
				<input class="form-check-input" type="checkbox" id="lambodoors" name="details[]" value="lambodoors">
				<label class="form-check-label" for="lambodoors">Lambo Doors</label>
			</div>
		</fieldset>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>



	<div class="h1 text-success p-5">{{ session('msg') }}</div>
</div>


@endsection