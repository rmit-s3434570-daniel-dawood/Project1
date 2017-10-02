@extends('layouts.master')
@section('title', 'Add a Booking')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Book a Ducky</h2>
        </div>
    </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
{!! Form::open(['action' => 'BookingController@store']) !!}

<div class="form-group">
    {!! Form::Label('car', 'Car:') !!}
    <select class="form-control" name="item_id">
        @foreach($cars as $car)
        <option value="{{$car->id}}">{{$car->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-inline">
    <div class="form-group">
    {!! Form::label('start_date', 'Booking Start Date') !!}
    {!! Form::input('date', 'start_date', null, ['class' => 'form-control']) !!}
   <div class="form-group">
    {!! Form::label('end_date', 'Booking End Date') !!}
    {!! Form::input('date', 'end_date', null, ['class' => 'form-control']) !!}

<div class="form-inline">
    <div class="form-group">
    {!! Form::label('start_date', 'Booking Start Date') !!}
    {!! Form::input('date', 'start_date', null, ['class' => 'form-control'], ['id' => 'start_date']) !!}
   <div class="form-group" id="end_date">
    {!! Form::label('end_date', 'Booking End Date') !!}
    {!! Form::input('date', 'end_date', null, ['class' => 'form-control'], ['id' => 'end_date']) !!}
    </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('mobile', 'Mobile Number') !!}
    {!! Form::text('mobile', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_line_1', 'Address') !!}
    {!! Form::text('address_line_1', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_line_2', 'Address') !!}
    {!! Form::text('address_line_2', '', ['class' => 'form-control']) !!}
</div>


<button class="btn btn-success" type="submit">Book Now!</button>

{!! Form::close() !!}
@endsection