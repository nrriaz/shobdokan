require('../bootstrap');

window.Vue = require('vue');

import MyCategory from '../components/MyCategory.vue';

const categories = new Vue({
    el: '#categories',
    components:{
    	'my-category':MyCategory
    }
});
