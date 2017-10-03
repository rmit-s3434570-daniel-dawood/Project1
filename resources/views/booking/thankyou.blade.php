@extends('layouts.master')
@section('title', 'Booking Successful')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thank You</h2>
            </div>
        </div>
    </div>
    @if(!empty(Session::get('name')))
        <p>Thanks {!! Session::get('name') !!},</p>
        <b>Below are the details</b>
        <p>Start Date: {!! Session::get('bookingDetails')->start_date !!}</p>
        <p>End Date: {!! Session::get('bookingDetails')->end_date !!}</p>
        <p>Address: {!! Session::get('bookingDetails')->address !!}

    @endif
@endsection