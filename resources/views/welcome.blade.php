@extends('layouts.layout')

@section('cus_css')
    <link rel="stylesheet" type="text/css" href="\css\home\home_carousel.css">
@stop

@section('cus_js')
    <script type="text/javascript" src="\js\home\home_carousel.js"></script>
    <script type="text/javascript" src="\js\home\all_category.js"></script>
@stop

@section('content')
    
    <div>
        @include('segments.home.carousel')
    </div>
    <div id="categories">
        @include('segments.home.categories')
    </div>

@stop
