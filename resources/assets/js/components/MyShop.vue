<template>
    <div class="shop-wrapper">
        <div class="shop-thumb">
            <img :src="thumb" alt="shop">
        </div>
        <div class="shop-name">
            {{ name }}
        </div>   
        <div class="shop-location">
            {{ location }}
        </div> 
    </div>
</template>

<script>
    export default {
        props:['thumb','name','location'],
    }
</script>

<style scoped>
    .shop-wrapper{
        border: 1px solid rgba(220,220,220,.5);
        max-width: 250px;
        max-height: 250px;
        overflow: hidden;
    }
    .shop-thumb img{
        max-height: 100%;
        max-width: 100%;
    }
    .shop-thumb{
        width: 90%;
        height: 60%;
        display: block;
        margin: auto;
    }
    .shop-name{
        font-size: 14pt;
        font-weight: bolder;
    }
    .shop-location{
        font-size: 10pt;
        font-style: italic;
    }
    .shop-name, .shop-location{
        padding-left: 15px;
    }
</style>