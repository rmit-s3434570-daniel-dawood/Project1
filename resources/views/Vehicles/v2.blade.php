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
							<img id="item-display" src="/images/hyundai i30 wagon.jpg" alt=""></img>
						</center>
					</div>
				</div>
				<br>	
				<div class="col-md-7">
					<div class="product-title">Hyundai i30 Wagon</div>
					<div class="product-desc"></div>
					<hr>
					<div class="product-price">$XXX Per Day</div>
					<div class="product-stock">In Stock</div>
					<div class="btn-group cart">
						<button type="button" class="btn btn-success">
							Book Now 
						</button>
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
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
								
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
						</section>
						
					</div>
					<div class="tab-pane fade" id="service-three">
												
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
@endsection
