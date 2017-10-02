@extends('layouts.master')
@section('title', 'View a Booking')
@section('content')

{{ $car_booking_id ->mobile}}

<form method="post" action="{!! action('BookingController@update', $car_booking_id->id) !!}">
    <input hidden name="id" value="{{$car_booking_id->id}}">

    <select name="status">
        <option value="returned">Return</option>
    </select>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit">
</form>

@endsection

