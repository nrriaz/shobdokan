<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="\jquery\jquery.js"></script>
    <script type="text/javascript" src="\tether\tether.min.js"></script>
    <script type="text/javascript" src="\bootstrap\bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="\bootstrap\bootstrap.min.css">
    <script type="text/javascript" src="\vue\vue.js"></script>
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield('cus_css')

</head>
<body>
    <div class="container-fluid">
        
        <div>
            @include('segments.home.topnav')    
        </div>

        @yield('content')

        <div class="text-center">
            <h1>This is footer</h1>
        </div>

        @yield('cus_js')
        
    </div>
</body>
</html>
