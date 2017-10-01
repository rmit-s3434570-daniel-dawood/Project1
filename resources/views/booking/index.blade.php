@extends('layouts.master')
@section('title', 'List of Bookings')
@section('content')

<div> List of Bookings</div>

<p>

<ul>
    @foreach($car_booking as $car_booking)
        <li>{{ $car_booking->name}}</li>
    @endforeach
</ul>

</p>

@endsection
