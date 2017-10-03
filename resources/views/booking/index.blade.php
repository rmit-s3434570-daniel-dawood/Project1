@extends('layouts.master')
@section('title', 'List of Current Bookings')
@section('content')

        <div class="container col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                        <div class="panel-heading">
                                <center><h2> Current Bookings </h2></center>
                        </div>
                        @if ($car_booking->isEmpty())
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
                                        @foreach($car_booking as $car_booking)
                                                <tr>
                                                        <td>{!! $car_booking->name !!}</td>
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