@extends('layouts.master')
@section('title', 'View a Booking')
@section('content')

{{ $car_booking_id ->name }}
{{ $car_booking_id ->email }}
{{ $car_booking_id ->status }}

@endsection

