@extends('layouts.master')

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
             
             ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            .nav{
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .nav:hover {
                background-color: #111;
            }
            
            .front-content-info {
                list-style-type: none;
                overflow: hidden;
                background-color: #FFDB58;
            }
            
            .front-content-text {
                display: block;
                color: Black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            
            .divider {
                padding-bottom: 5mm;
            }
            
            .col-sm-3 {
                display: block, center;
                height: 250px;
                background-color: #CD7F32;
            }
            

        </style>
    </head>


    <div>
        @if (Route::has('login'))
            <div class="links" style="text-align:right">
                @if (Auth::check())
                    <a href="/home">Home</a>
                @else
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                @endif
            </div>
        @endif
    </div>

    <body>
        
    <script>

        function downloadUrl(url,callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        downloadUrl('xml-dump', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
                var id = markerElem.getAttribute('id');
                var name = markerElem.getAttribute('name');
                var address = markerElem.getAttribute('address');
                var type = markerElem.getAttribute('type');
                var point = new google.maps.LatLng(
                    parseFloat(markerElem.getAttribute('lat')),
                    parseFloat(markerElem.getAttribute('lng')));

                var infowincontent = document.createElement('div');
                var strong = document.createElement('strong');
                strong.textContent = name
                infowincontent.appendChild(strong);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = address
                infowincontent.appendChild(text);
                var icon = customLabel[type] || {};
                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    label: icon.label
                });
            });
        });

    </script>



        <div class="jumbotron" style="text-align: center; background-color: #f9ea43" >
            <h1>Ducky</h1>
        </div>
        
        <div>
            <ul>
              <li><a class="nav"  href="/">Home</a></li>
              <li><a class="nav"  href="/vehicles">Vehicles</a></li>
              <li><a class="nav"  href="/locations">Locations</a></li>
              <li><a class="nav"  href="/contact">Contact</a></li>
              <li><a class="nav" href="/about">About</a></li>
            </ul>
        </div>
        
        <div class="container" id='map'></div>
        <script>
            function initMap() {

                var melbourne = {lat: -37.8136, lng: 144.9631};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: melbourne
                });
               
                
                var mapLabel = new MapLabel({
                    text: 'Test',
                    position: new google.maps.LatLng(50,50),
                    map: melbourne,
                    fontSize: 20,
                    align: 'top'
                });
            }
        </script>


        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfo7clIjcqC3ptT6-t3SdRFZd-j99wCWo&libraries=places&callback=initMap">
        </script>
        
        <div class="front-content-info">
            <li>
                {{-- add dots --}}
                <li class="front-content-text"><h3>Drive all around Melbourne</h3></li>
                <li class="front-content-text"><h3>Multiple Cars</h3></li>
                <li class="front-content-text"><h3>Multiple Locations</h3></li>
            </li>
        </div>
        
        <div class="divider"></div>
        
        <div class="front-grid">
            <div class="col-sm-0.5"></div>
            <div class="col-sm-3"><h3>Book Vehicles near you, Any hour of the day</h3>
                <br><button type="button" class="btn btn-primary">
                    <a href="/booking/create" >Book Now</a></button></div>
                
            <div class="col-sm-1"></div>
            <div class="col-sm-3"><h3>A wide range of Vehicles, Get the right vehicle</h3>
                <br><button type="button" class="btn btn-primary">
                    <a href="/vehicles">View Vehicles</a></button></div>
                
            <div class="col-sm-1"></div>
            <div class="col-sm-3"><h3>Fuel, cleaning, rego and servicing all included</h3>
                <br><button type="button" class="btn btn-primary">
                    <a href="auth/register" >Join Now</a></button></div>
        </div>
        
        
        <div>
            <ul>
              <li><a href="/faq">FAQs</a></li>
              <li><a href="/privacy">Privacy Policy</a></li>
              <li><a href="/terms">Terms of Use</a></li>
              <li><a href="/refund">Refund Policy</a></li>
            </ul> 
        </div>        
    </body>
</html>
