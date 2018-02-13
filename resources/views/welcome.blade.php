@extends('layouts.layout')

@section('cus_css')
    <link rel="stylesheet" type="text/css" href="\css\home_carousel.css">
@stop

@section('cus_js')
    <script type="text/javascript" src="\js\home_carousel.js"></script>
@stop

@section('content')
    
    <div>
        @include('segments.home.topnav')    
    </div>
    <div>
        @include('segments.home.carousel')
    </div>
    <div>
        
    </div>

@stop
