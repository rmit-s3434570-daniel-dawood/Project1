@extends('layouts.master')
<<<<<<< HEAD
@section('title', 'View a Booking')
@section('content')

{{ $car_booking_id ->name }}
{{ $car_booking_id ->email }}
{{ $car_booking_id ->status }}
=======
@section('title', 'List of Bookings')
@section('content')

<div> List of Bookings</div>

<p>

        {{ $car_booking_id -> country }}


</p>
>>>>>>> ee7a0cf175bee9703643a0d6c38dc94749afeb4f

@endsection

