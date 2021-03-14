<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@350&display=swap" 
        rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="{{asset('/vendor/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/vendor/css/font-awesome.min.css')}}">

        <style type="text/css">
            body{
                font-family: 'Open Sans','verdana', sans-serif;
                font-size: 15px;
            }

            footer{
                margin: 50px 0px;
            }

            .about{
                margin-top: 30px; 
            }

            
        </style>
        <title>{{ page_title($title ?? '') }}</title>
    </head>
    <body>
        @include('layouts/partials/_nav')
        
        @yield('content')

        @include('layouts/partials/_footer')

    <script src="{{asset('/vendor/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/vendor/js/bootstrap.min.js')}}"></script>
    </body>
</html>