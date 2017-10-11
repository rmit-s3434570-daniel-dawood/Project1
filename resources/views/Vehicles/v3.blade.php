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
							<img id="item-display" src="/images/Kia Sportage.png" alt=""></img>
						</center>
					</div>
				</div>
				<br>	
				<div class="col-md-7">
					<div class="product-title">Kia Sportage</div>
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
						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
							<p>
							Looking fine inside and out, the Kia Sportage is a very stylish little SUV that is a joy to drive 
							on city streets and the open road. With heaps of space inside it’s great for trips with friends, 
							and it even has a rear USB charger and air con vent for those in the back.	
							</p>	
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
						<p>
							<ol>
								<li>Seats 5</li><br>
								<li>5 star ANCAP safety rating</li><br>
								<li>Eco drive mode to save fuel and emissions</li><br>
								<li>ABS brakes, electronic stability control, downhill brake control and hill-start assist</li><br>
								<li>Front, rear and curtain SRS airbags</li><br>
								<li>Rear parking camera and sensors</li><br>
								<li>7″ colour touch screen audio system with CarPlay, Android Auto, Bluetooth and USB</li><br>
								<li>Auto headlights with escort function</li><br>
								<li>Large boot space</li>
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
