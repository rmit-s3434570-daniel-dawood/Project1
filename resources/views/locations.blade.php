@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="{{ ('css/main.css') }}">

  <head>
    

   

        
        <style>
  

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
             
           
            
    </style>
  

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
@endsection    
</html>