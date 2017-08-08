<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ducky</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* Google Maps Styling*/
             .google-maps {
                 position: relative;
                 padding-bottom: 75%;
                 height: 0;
                 overflow: hidden;
             }
            .google-maps iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100vw !important;
                height: 60vh !important;
            }

             #map {
                 height: 400px;
                 width: 100%;
             }

        </style>
    </head>

{{--@extends('layouts/app')--}}

    <div>
        @if (Route::has('login'))
            <div class="links" style="text-align:right">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
    </div>

    <body>

        {{--<div>--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--Ducky--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="google-maps">--}}
                {{--<iframe--}}
                        {{--width="1000"--}}
                        {{--height="450"--}}
                        {{--frameborder="0" style="border:0"--}}
                        {{--src="https://www.google.com/maps/embed/v1/search?key=AIzaSyAhidHBjZYikpLBhgoPiCP6lKoXyaY7KAY--}}
        {{--&q=Melbourne&zoom=15" allowfullscreen>--}}
                {{--</iframe>--}}
            {{--</div>--}}

        {{--</div>--}}

        <h3>Maps Demo</h3>
        <div id='map'></div>
        <script>
            function initMap() {
                var uluru = {lat: -25.363, lng: 131.044};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>


        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfo7clIjcqC3ptT6-t3SdRFZd-j99wCWo&libraries=places&callback=initMap">
        </script>

    </body>
</html>
