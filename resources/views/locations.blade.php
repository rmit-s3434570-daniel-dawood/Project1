@extends('layouts.master')

<!DOCTYPE html>
<html>
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
                 height: 600px;
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

        {{--------}}

        <div class="jumbotron" style="text-align: center; background-color: #f9ea43" >
            <h1>Ducky</h1>
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
        <input id="pac-input" type="text" placeholder="Search Box"/>
        <div class="container" id='map'></div>
  <body>
  
    <div id="map"></div>

    <script>
      // Search box 

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -37.8136, lng: 144.9631},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

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
        
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

     
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        
        var markers = [];
      
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

         
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }



    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfo7clIjcqC3ptT6-t3SdRFZd-j99wCWo&libraries=places&callback=initAutocomplete"
         async defer>
           
    </script>

     <br>
        
        <div class="about-container">
            <div class="panel panel-default">
                <div class="panel-heading">How to use</div>
                <div class="panel-body">Info on how to use</div>
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