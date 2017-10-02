@extends('layouts.master')
<<<<<<< HEAD
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
=======
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
>>>>>>> ee7a0cf175bee9703643a0d6c38dc94749afeb4f
