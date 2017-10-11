@extends('layouts.master')
@section('title', 'View a Booking')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Booking</h2>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User Details:</strong>
            <p>Email: {{ $car_booking_id->email}}</p>
            <p>Name: {{ $car_booking_id->name}}</p>
            <p>Mobile: {{ $car_booking_id->mobile}}</p>
            <p>Address: {{ $car_booking_id->address}}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        </div>
    </div>
    <div class="form-group">
        <strong>Start Date</strong>
        <p>{{ $car_booking_id->start_date }}</p>
        <strong>End Date</strong>
        <p>{{ $car_booking_id->end_date }} </p>
    </div>

    <form method="post" action="{!! action('BookingController@update', $car_booking_id->id) !!}">
        <input hidden name="id" value="{{$car_booking_id->id}}">

        <select name="status">
            <option value="returned">Return</option>
        </select>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit">
    </form>

@endsection

