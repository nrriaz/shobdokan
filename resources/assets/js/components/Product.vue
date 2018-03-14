<template>
	<div class="product">
		<div class="thumb">
			<img class="product-thumb" src="/images/samples.png" alt="placeholder+image">
			<button class="btn btn-default add">Add</button>
		</div>
		<div class="desc">
			<div>Product Name</div>
			<div class="product-info">
				<div id="price">500tk</div>
				<div id="rating">4.93</div>
			</div>
			<div class="product-info">
				<div id="sold">Sold</div>
				<div id="available">Availability</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{

	}
</script>

<style scoped>
	.product{
		width: 150px;
		height: 200px;
		margin: 10px;
	}
	.product-thumb{
		width: 100%;
		height: 100%;
	}
	.product-info div{
		display: inline-block;
	}
	#rating, #available{
		float: right;
	}
	.desc{
		display: block;
		width: 100%;
	}
	.thumb{
		position: relative;
		width: 100%;
		height: 60%;
	}
	.add{
		position: absolute;
		right: 0px;
		bottom: 3px;
		background-color: red;
	}
</style>