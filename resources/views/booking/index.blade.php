@extends('layouts.master')
@section('title', 'View all Bookings')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">
<center><h2> Bookings </h2></center>
</div>
@if ($car_booking->isEmpty())
<p> There are currently no Bookings available.</p>
@else
<table class="table">
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
</tr>
</thead>
<tbody>
@foreach($car_booking as $car_booking)
<tr>
    <td>
        <a href="{!! action('BookingController@show', $car_booking->id) !!}">{!! $car_booking->id !!} </a>
    </td>
    <td>{!! $car_booking->email !!}</td>
    <td>{!! $car_booking->status !!}</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
@endsection