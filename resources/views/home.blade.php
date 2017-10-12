@extends('layouts.master')
@section('title', 'Home')
@section('content')

<link rel="stylesheet" href="{{ ('css/main.css') }}">

        <!-- Logged in confirm -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div>
                <div class="panel-heading" style="font-weight: 700; background-color: #f9ea43">Welcome: {{ Auth::user()->name }} </div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>
@endsection
