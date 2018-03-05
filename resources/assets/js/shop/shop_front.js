require('../bootstrap');

window.Vue = require('vue');

import ShopCategory from '../components/ShopCategory.vue';
import Product from '../components/Product.vue';
import Review from '../components/UserReview.vue';

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