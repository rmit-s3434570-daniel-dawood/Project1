@extends('layouts.master')
@section('title', 'History List of Previous Bookings')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center><h2> Previous Bookings </h2></center>
            </div>
            @if ($car_booking_history->isEmpty())
                <p> There are currently no bookings available.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($car_booking_history as $car_booking_history)
                        <tr>
                            <td>{!! $car_booking_history->name !!}</td>
                            <td>{!! $car_booking_history->email !!}</td>
                            <td>{!! $car_booking_history->status !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection


