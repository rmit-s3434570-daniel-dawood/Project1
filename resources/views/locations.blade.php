@extends('layouts.master')
@section('title', 'Home')
@section('content')

        <!-- Map Locations -->
        <div class="container" id='map'></div>

        
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



@endsection
