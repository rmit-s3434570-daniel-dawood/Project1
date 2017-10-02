@extends('layouts.master')
 @section('title', 'History List of Bookings')
 @section('content')

 <div> History List of Bookings</div>

 <p>

     @foreach($car_booking_history as $car_booking_history)
 <ul>
         <li>{{ $car_booking_history->name}}</li>
         <li>{{ $car_booking_history->status}}</li>
         <li>{{ $car_booking_history->email}}</li>
 </ul>
     @endforeach

dkasjdlkasjdlkasjdklasjdklsaj
</p>

 @endsection
