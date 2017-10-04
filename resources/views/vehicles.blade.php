@extends('layouts.master')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ducky Vehicles</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

             ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #111;
            }
            
            
            .each-item
            {
                position:relative;
                overflow:hidden;
            }
        
        
        
        
        </style>
    </head>


    <div>
        @if (Route::has('login'))
            <div class="links" style="text-align:right">
                @if (Auth::check())
                    <a href="'/home">Home</a>
                @else
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                @endif
            </div>
        @endif
    </div>

    <body>

        <div class="jumbotron" style="text-align: center; background-color: #f9ea43" >

            <h1>Ducky</h1>
        </div>
        
        <div>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/vehicles">Vehicles</a></li>
              <li><a href="/locations">Locations</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/about">About</a></li>
            </ul>
        </div>
        
        <div>
        <legend>Ducky Vehicles</legend>  
        

        <button class="btn btn-primary filter-button" data-filter="all">All</button>
        <button class="btn btn-default filter-button" data-filter="Hyundai">Hyundai</button>
        <button class="btn btn-default filter-button" data-filter="Kia">Kia</button>
        <button class="btn btn-default filter-button" data-filter="Toyota">Toyota</button>
        <button class="btn btn-default filter-button" data-filter="Audi">Audi</button>        
        </div>
        

        <br>
        
        
        
        <!-- Vehicles -->        
        <div class = "Vehicle-container" >

        	<div class="Hyundai" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left">
			        <h2> Hyundai i30 Wagon</h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $40 p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body" style="background-color: #00FF00">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>
			<br><br><br>
			<div class="All Kia" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="each-item">
			     <div class="col-xs-12 col-sm-6 col-md-8" style="float:left" >
			        <h2> Kia Sportage </h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $30 p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body" style="background-color: #00FF00">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			    </div>
			</div>
			<br><br><br>
			<div class="Toyota" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left" >
			        <h2> Toyota Yaris </h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $10 p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body" style="background-color: #00FF00">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>
			<br><br><br>
			<div class="Audi" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left" >
			        <h2> Audi A1</h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $5 p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body" style="background-color: #00FF00">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>
			<br><br><br>
			<div class="Coming Soon" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left" >
			        <h2> Coming Soon</h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $? p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body" style="background-color: #736F6E">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>
			<br><br><br>			
			<div class="Coming Soon" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left" >
			        <h2> Coming Soon</h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $? p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body" style="background-color: #736F6E">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>			
			<br><br><br>			
        </div>
        
        <script>
        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
        
                if(value == "all")
                {
                 //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
                    //$('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
            
                }
            });
    
        });

        </script>        
        
        
        
        
        
        <br>
        <br>
        <br>
        <!-- Footer -->
        <div>
            <ul>
              <li><a href="/faq">FAQs</a></li>
              <li><a href="/privacy">Privacy Policy</a></li>
              <li><a href="/terms">Terms of Use</a></li>
              <li><a href="/refund">Refund Policy</a></li>
            </ul> 
        </div>
        
    </body>
</html>
