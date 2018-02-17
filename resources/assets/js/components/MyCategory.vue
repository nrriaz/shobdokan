<template>
    <div class="categories">
        <div class="nav-back">
            <span class="left-arrow" v-if="leftShow" @click="leftNavClick">&lt;</span>
        </div>
        <h4>Category 1</h4>
        <div class="flex-container">
           <my-shop
                v-for="(shop,index) in vshop"
                :name="shop.name"
                :thumb="shop.thumb"
                :location="shop.location"
                :key="index">
            </my-shop>
        </div>
        <div class="nav-back">
            <span class="right-arrow" v-if="rightShow" @click="rightNavClick">&gt;</span>
        </div>
    </div>
</template>

<script>
    import MyShop from './MyShop.vue';

    export default {
        data(){
            return {
                shops:[
                    {name:'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',thumb:'/images/carousel/img1.jpg',location:'lorem ipsum dolor'},
                    {name:'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',thumb:'/images/carousel/img1.jpg',location:'lorem ipsum dolor'},
                    {name:'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',thumb:'/images/carousel/img1.jpg',location:'lorem ipsum dolor'},
                    {name:'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',thumb:'/images/carousel/img1.jpg',location:'lorem ipsum dolor'},
                    {name:'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',thumb:'/images/carousel/img1.jpg',location:'lorem ipsum dolor'},
                    {name:'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',thumb:'/images/carousel/img1.jpg',location:'lorem ipsum dolor'},
                    {name:'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',thumb:'/images/carousel/img1.jpg',location:'lorem ipsum dolor'},
                    {name:'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',thumb:'/images/carousel/img1.jpg',location:'lorem ipsum dolor'}
                ],
                vshop:[],
                vshop_number:5,
                current_index:0
            }
        },
        components:{
            'my-shop':MyShop
        },
        created(){
            this.rightNavClick();
        },
        methods:{
            rightNavClick(){
                this.vshop=[];
                var i;
                for(i=0;i<this.vshop_number && (i+this.current_index)<this.shops.length;i++){
                    this.vshop.push(this.shops[i+this.current_index]);
                }
                this.current_index+=i;
            },
            leftNavClick(){
                this.vshop=[];
                var i;
                for(i=0;i<this.vshop_number;i++){
                    this.vshop.push(this.shops[this.current_index-this.vshop_number-1+i]);
                }
                this.current_index-=i;
                this.checkIndex();
            },
            checkIndex(){
                if(this.current_index<this.vshop_number){
                    this.current_index=this.vshop_number;
                }
            }
        },
        computed:{
            leftShow(){
                return (this.current_index-this.vshop_number)>0?true:false;
            },
            rightShow(){
                return this.current_index<this.shops.length?true:false;
            }
        }
    }
</script>

<style scoped>
    .categories{
        position: relative;
        border: 1px solid silver;
        padding: 10px;
        max-width: 100%;
    }
    .left-arrow,.right-arrow{
        position: absolute;
        top: 45%;
        color: red;
        font-weight: bolder;
        background-color: black;
        font-size: 45pt;
        line-height: 1.5cm;
        border-radius:2cm;

        cursor: pointer;
    }
    .right-arrow{
        right: 0px;
    }
    .left-arrow{
        left: 0px;
    }
    .flex-container{
        padding-left: 20px;
        padding-right: 20px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
</style>
