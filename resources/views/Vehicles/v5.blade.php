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
							<img id="item-display" src="images/Toyota Corolla.jpg" alt=""></img>
						</center>
					</div>
				</div>
				<br>	
				<div class="col-md-7">
					<div class="product-title">Toyota Corolla</div>
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
							For a big shop or a small move, the Corolla has plenty of room.	
							</p>	
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
						<p>
							<ol>
								<li>Seats 5</li><br>
								<li>6 SRS Airbags</li><br>
								<li>ABS brakes</li><br>
								<li>5 star ANCAP safety rating</li><br>
								<li>Usable cargo area – rear seats fold flata</li><br>
								<li>Touch screen audio system</li>
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
