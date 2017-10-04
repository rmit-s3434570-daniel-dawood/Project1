

<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Ducky</title>

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
        
        </style>
    </head>


    <div>
        <?php if(Route::has('login')): ?>
            <div class="links" style="text-align:right">
                <?php if(Auth::check()): ?>
                    <a href="'/home">Home</a>
                <?php else: ?>
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
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
        
        <!-- Vehicles -->
        <div class = "Vehicle-container" >
        	<div class="Car-1" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left">
			        <h2> Hyundai i30 Wagon</h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $40 p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>
			<br><br><br>
			<div class="Car-2" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left" >
			        <h2> Kia Sportage </h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $30 p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>
			<br><br><br>
			<div class="Car-3" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left" >
			        <h2> Toyato Yaris </h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $10 p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>
			<br><br><br>
			<div class="Car-4" style="width:80%; height: 200px; align: center; border-style:groove;">
			    <div class="col-xs-12 col-sm-6 col-md-8" style="float:left" >
			        <h2> Audi A1</h2>
			        <p>add image</p>
			    </div>
		    	<div class="col-xs-6 col-md-4" style="float:right">
		    	    <h3>Pricing - $5 p/day</h3>
		    	    <div class="panel panel-default">
                      <div class="panel-body">
                       Availability
                      </div>
                    </div>
		    	    <p><a class="btn btn-primary btn-lg" href="/booking/create" role="button">Book now!</a></p>
		    	</div>
			</div>
			<br><br><br>
			
			
			
			
			
			
			
			
        </div>
        
        
        <br>
        <br>
        <br>
        <!-- Footer -->
        <div>
            <ul>
              <li><a href="">Footer Stuff here</a></li>
            </ul> 
        </div>
        
    </body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>