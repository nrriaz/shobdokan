<template>
	<div class="review">
		<div class="rate-star">
			<div>
				<i class="fas fa-star" v-for="i in rating*1"></i>
				<i class="far fa-star" v-for="j in 5-rating*1"></i>
			</div>
			<div>
				<h5>{{ rating_subject }}</h5>
			</div>
		</div>
		<div class="rating-info">
			Posted by {{ rating_name }} on {{ rating_time }}
		</div>
		<div class="comment">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		</div>
		<hr>
	</div>
</template>

<script>
	export default{
		props:['rating','rating_subject','rating_time','rating_name']
	}
</script>

<style scoped>
	.comment{
		font-size: 12pt;
		padding-top: 5px;
	}
	.rating-info{
		font-size: 10pt;
		font-style: italic;
	}
	.review{
		padding-left: 15px; 
		border-left: 1px solid silver;
	}
	.rate-star div{
		display: inline-block;
		padding-right: 10px;
	}
	.rate-star div,.rating-info{
		padding-bottom: 0px;
		margin-bottom: 0px; 
	}
</style>