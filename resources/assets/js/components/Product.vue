<template>
	<div class="product">
		<div class="thumb">
			<img class="product-thumb" src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
		</div>
		<div class="desc">
			<div>Product Name</div>
			<div class="product-info">
				<div id="price">Price</div>
				<div id="rating">Rating</div>
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
		width: 100%;
		height: 60%;
	}
</style>