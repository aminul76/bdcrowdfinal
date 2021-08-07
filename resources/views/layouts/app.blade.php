<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 <!--====== Title ======-->
 <title>@yield('title')</title>



        <!--====== favicon Icon ======-->
        <link rel="icon" href="{{asset('frontend/images/fabicon.svg')}}">

        <!--====== font-awesome css ======-->
        <link rel="stylesheet" href="{{asset('frontend/font-awesome-icon/css/font-awesome.min.css')}}">


        <!--====== Normalize css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">


        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

        <!--====== style css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @yield('styles')
        
    </head>
<body>


    <div id="app" class="bodyWrapper">
        @include('layouts.header')
        @include('flash-message')
        <main class="">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    @yield('script')

    

    <!--====== javascript & jquery ======-->

    <!--====== html5shiv js ======-->
    <script src="{{asset('frontend/js/html5shiv.min.js')}}"></>

    <!--====== selectivizr js ======-->
    <script src="{{asset('frontend/js/selectivizr-min.js')}}"></script>

    <!--====== Respond js ======-->
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>

 

    <!--====== JQuery js ======-->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>

    <!--====== Poper js ======-->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
