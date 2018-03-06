require('../bootstrap');

window.Vue = require('vue');

import ShopCategory from '../components/ShopCategory.vue';
import Product from '../components/Product.vue';
import Review from '../components/UserReview.vue';
import PhotoThumb from '../components/PhotoThumb.vue';

const shop_category = new Vue({
    el: '#shop_category',
    components:{
    	'shop-category':ShopCategory,
    	'product':Product
    }
});

const shop_reviews= new Vue({
	el:'#shop_reviews',
	components:{
		'user-review':Review
	}
});

const shop_photos=new Vue({
	el:'#shop_photos',
	components:{
		'photo-thumb':PhotoThumb
	}
});