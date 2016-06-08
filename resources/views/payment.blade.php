@extends('layouts.master')

@section('title','Home Page')

@section('content')
<h3>this is payment page</h3>

<div id="body">
		
		<!-- <h3>${{ Cart::total() }}</h3> -->
		<?php echo $totalAmount; ?>


		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_xclick">
		<input type="hidden" name="business" value="shahedkhan2000-facilitator@gmail.com">
		<input type="hidden" name="item_name" value="Total">
		<input type="hidden" name="item_number" value="TOTAL">
		<input type="hidden" name="amount" value="<?php echo $totalAmount; ?>">
		<input type="hidden" name="shipping" value="0.00">
		<input type="hidden" name="no_shipping" value="0">
		<input type="hidden" name="no_note" value="1">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="bn" value="PP-BuyNowBF">
		<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
	</div>

@stop