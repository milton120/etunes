@extends('layouts.master')

@section('title','Home Page')

@section('content')

<br>
<br>
<br>
<br>
<div class="col-md-6 col-md-offset-3">

	{!! Form::open(array('action' => 'PaymentController@store', 'class'=>'form-horizontal')) !!}
	  <div id="payment-form"></div>
	  <input type="submit" value="Pay">
	{!! Form::close() !!}
</div>

<div id="field" data-field-id="{{ $clientToken }}" ></div>

<script src="https://js.braintreegateway.com/js/braintree-2.24.1.min.js"></script>
<script>

var clientToken = $('#field').data("field-id");

braintree.setup(clientToken, "dropin", {
  container: "payment-form"
});
</script>


@stop