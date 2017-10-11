@extends('layouts.master')
@section('title', 'Home')
@section('content')
        <!-- FAQ -->
        <legend>Ducky FAQ</legend>
        <div class="panel panel-default">            
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a data-toggle="collapse" href="#collapse1">Making a Booking</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <a href="#">The system isn't letting me make a booking</a><br>
                    <a href="#">Forgot my username or password</a><br>
                    <a href="#">I need to change my booking</a><br>
                </div>
            </div>
        </div>   
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a data-toggle="collapse" href="#collapse2">Billing</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <a href="#">PayPal</a><br>
                    <a href="#">Credit Cards or Master Cards</a><br>
                    <a href="#">How to view invoices</a><br>                    
                </div>
            </div>             
        </div> 
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a data-toggle="collapse" href="#collapse3">Cars</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <a href="#">What cars do you have?</a><br>
                    <a href="#">What areas do you operate?</a><br>
                    <a href="#">What cars are near me?</a><br>                    
                </div>
            </div>             
        </div>          
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a data-toggle="collapse" href="#collapse4">Damage</a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <a href="#">Car has damage, what do I do?</a><br>
                    <a href="#">I had an accident</a><br>
                    <a href="#">I accidentally damaged the car</a><br>                    
                </div>
            </div>             
        </div>          
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a data-toggle="collapse" href="#collapse5">Membership</a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <a href="#">Do you have plans?</a><br>
                    <a href="#">How many drivers can be on my account?</a><br>
                    <a href="#">I need a car for a few weeks</a><br>                    
                </div>
            </div>             
        </div>       
@endsection
        
   

