<template>
	<div class="main-wrapper">
		<div class="title">
			sample category
		</div>
		<div class="product">
			<slot></slot>
		</div>
		<hr>
	</div>
</template>

<script>
	export default{
		
	}
</script>

<style scoped>
	.title{
		font-size: 16pt;
		font-weight: bold;
	}
	.product{
		display: flex;
		flex-wrap: wrap;
	}
	.main-wrapper{
		padding-left: 5%;
	}
</style>