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

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #111;
            }
        
        </style>
    </head>


    <div>
        @if (Route::has('login'))
            <div class="links" style="text-align:right">
                @if (Auth::check())
                    <a href="'/home">Home</a>
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
            <h1>Ducks Locations</h1>
        </div>
        
        <div>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/vehicles">Vehicles</a></li>
              <li><a href="/locations">Locations</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/about">About</a></li>
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
                var marker = new google.maps.Marker({
                    position: melbourne,
                    map: map
                });

                var melbournecentral = {lat: -37.810821, lng: 144.963123};
                var marker = new google.maps.Marker({
                    position: melbournecentral,
                    map: map
                });

                var unimelb = {lat: -37.796371, lng: 144.961186};
                var marker = new google.maps.Marker({
                    position: unimelb,
                    map: map
                });

                var bourkestreetmall = {lat: -37.813536, lng: 144.964377};
                var marker = new google.maps.Marker({
                    position: bourkestreetmall,
                    map: map
                });

                var townhall = {lat: -37.814948, lng: 144.966905};
                var marker = new google.maps.Marker({
                    position: townhall,
                    map: map
                });
            }
        </script>
        
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfo7clIjcqC3ptT6-t3SdRFZd-j99wCWo&libraries=places&callback=initMap">
        </script>

        <br>
        
        <div class="about-container">
            <div class="panel panel-default">
                <div class="panel-heading">How to locate your Car</div>
                <div class="panel-body">
                Most locations only have one car, but some on-street locations have two or
                three cars together, and locations in buildings and commercial car parks can have up to 60 cars all together!
                The location will be listed when you make a booking. It will typically be shown as Suburb - Street, 
                and then sometimes a cross-street or street number.
                For locations that are a bit tricky to get to, your Booking Confirmation email will have more information about 
                exactly where the location is, and how to get to the cars. Your Booking Confirmation is emailed to you after 
                you make a booking.
                If the location has multiple cars in it, please check the car name or number plate against your Booking 
                Confirmation email. If you take the wrong car, you may inconvenience another member and get fined. 
                You may also be charged for bookings on both cars.    
                </div>
            </div>
        </div>    

        <!-- Footer -->
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