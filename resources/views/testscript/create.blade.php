@extends('layouts.app')

@section('content')

<div class="container">

<div class="h1">Create page is working</div>



<form action="/testscript" method="POST">
	@csrf  <!-- takes you back to home screen in the event of cross site request forgery -->
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
    <label for="priceofcar" class="form-label">Year</label>
    <input type="number" class="form-control" id="priceofcar" name="priceofcar" aria-describedby="year of car">
    <div id="priceofcarEntry" class="form-text">Please enter the model year of your car.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<div class="h1 text-success p-5">{{ session('msg') }}</div>
</div>


@endsection