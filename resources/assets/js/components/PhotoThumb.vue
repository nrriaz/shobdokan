<template>
	<div class="root" >
		<div class="photo"   @mouseenter="showDesc" @mouseleave="hideDesc" @click="clicked()">
			<img src="/images/samples.png">
			<div class="desc" v-show="isDesc">
				<div class="title">
					Lorem ipsum dolor sit amet
				</div>
				<hr>
				<div class="product_name">
					Lorem ipsum dolor
				</div>
				<div class="pub_date">
					06th March 2018 at 3.57pm
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data(){
			return {
				isDesc:false
			}
		},
		methods:{
			showDesc(event){
				this.isDesc=true;										
			},
			hideDesc(event){
				this.isDesc=false;
			},
			clicked(){
				console.log('click');
			}
		}
	}
</script>

<style scoped>
	.photo{
		width: 200px;
		height: 200px;
		position: relative;
	}
	.photo img{
		width:98%;
		height: 98%;
		cursor: pointer;
	}
	.root{
		display: inline-block;
	}
	.desc{
		position: absolute;
		left: 0px;
		bottom: 3px;
		padding: 3%;
		background-color: rgba(0,0,0,.5);
		color: white;
	}
	.title{
		font-weight: bold;
		font-size: 12pt;
	}
	.product_name{
		font-size: 10pt;
	}
	.pub_date{
		font-size: 8pt;
	}
	hr{
		margin-top: 0px;
		margin-bottom: 0px;
	}
</style>