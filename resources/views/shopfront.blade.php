@extends('layouts.layout')

@section('cus_css')
	<link rel="stylesheet" type="text/css" href="\css\shopfront\shopfront_common.css">
	<link rel="stylesheet" type="text/css" href="\css\shopfront\shop_reviews_css.css">
	<link rel="stylesheet" type="text/css" href="\css\shopfront\shop_about.css">
@stop

@section('cus_js')
	<script type="text/javascript" src="\js\shop\shop_front.js"></script>
	<script type="text/javascript" src="\js\shop\shop_js.js"></script>
@stop

@section('content')
	<div id="shop">
		<div>
			<div class="front">
				<div>
					<img class="front-cover" src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
				</div>
				<div class="front-profile">
					<img src="http://dummyimage.com/600x600/ff0000/000000.gif&text=placeholder+image" alt="placeholder+image">
				</div>
			</div>
			<div class="front-desc">
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
			</div>
		</div>
		<div class="shop-front-tab">
			<ul>
				<li v-for="tab in tabs" :id="tab.tab_id" :key="tab.tab_id" @click="showHide($event.target)" :class="{'active-tab':tab.isActive}">@{{ tab.tab_name }}</li>
			</ul>
		</div>
		<br>
		<div v-if="tabs[0].isActive">
			@include('segments.shop.shop_category')
		</div>
		<div v-if="tabs[1].isActive">
			@include('segments.shop.shop_reviews')
		</div>
		<div v-if="tabs[5].isActive">
			@include('segments.shop.shop_about')
		</div>
	</div>
@stop