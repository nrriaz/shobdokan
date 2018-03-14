@extends('layouts.layout')

@section('cus_css')
	<link rel="stylesheet" type="text/css" href="\css\cart.css">
@stop

@section('cus_js')
	
@stop

@section('content')
	<br>
	<br>
	<div class="main">
		<div class="first_div">
			<div class="cart"><h2>Cart</h2></div>
			<div class="isCon"><button class="btn btn-success">Continue Shopping</button></div>
		</div>
		<br>
		<div>
			<table class="table">
				<thead>
					<th></th>
					<th>Item</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Subtotal</th>
				</thead>
				<tbody>
					<tr>
						<td class="prod_img"><img src="\images\samples.png"></td>
						<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</td>
						<td>
							<select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</td>
						<td> &#36;1250</td>
						<td> &#36;1250</td>
					</tr>
					<tr></tr>
					<tfoot>
						<td colspan="3"></td>
						<td colspan="2" class="total_table">Total &#36;1250</td>
					</tfoot>
				</tbody>
			</table>
		</div>
		<div class="bottom_div">
			<div class="taka"><h4>Total &#36;1250</h4></div>
			<div class="checkout">
				<button class="btn btn-warning">Proceed to Checkout</button>
			</div>
		</div>
	</div>
@stop