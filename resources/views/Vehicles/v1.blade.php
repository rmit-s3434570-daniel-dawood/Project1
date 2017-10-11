@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-12">
					<div class="product col-md-3 service-image-left">
                    
						<center>
							<img id="item-display" src="images/Audi A1.jpg" alt=""></img>
						</center>
					</div>
				</div>
				<br>	
				<div class="col-md-7">
					<div class="product-title">Audi A1</div>
					<div class="product-desc"></div>
					<hr>
					<div class="product-price">$XXX Per Day</div>
					<div class="product-stock">In Stock</div>
					<div class="btn-group cart">
					<button type="button" class="btn btn-success">
                <a href="booking/create" >Book Now</a></button>
					</div>					
					<hr>
				</div>
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-two" data-toggle="tab">FEATURES</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
							<p>
								Compact, sporty and a bit glamorous, 
								the Audi A1 is a hot little car for getting around the city.
							</p>	
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
						<p>
							<ol>
								<li>Seats 4</li><br>
								<li>5 star ANCAP safety rating</li><br>
								<li>Dual airbags (driver/passenger)</li><br>
								<li>ABS brakes and traction control</li><br>
								<li>Cruise control</li><br>
								<li>Turbo charged engine</li>
							</ol>
						</p>
						</section>
						
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
@endsection
