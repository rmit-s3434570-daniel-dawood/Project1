@extends('layouts.master')
@section('title', 'Home')
@section('content')

<link rel="stylesheet" href="{{ ('css/main.css') }}">

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="/images/c4.png" alt="Tutrtle" style="width:100%; Height:395px">
        <div class="carousel-caption">
          <h3>Travel the city</h3>
        </div>
      </div>

      <div class="item">
        <img src="/images/carousel1.jpg" alt="Family" style="width:100%; Height:395px">
        <div class="carousel-caption">
          <h3>Travel with the family</h3>
        </div>
      </div>

      <div class="item">
        <img src="/images/carousel2.jpg" alt="Cars" style="width:100%; Height:395px">
        <div class="carousel-caption">
          <h3>A Variety of cars</h3>
        </div>
      </div>

      <div class="item">
        <img src="/images/carousel3.jpg" alt="Location" style="width:100%; Height:395px">
        <div class="carousel-caption">
          <h3>Stored at many locations</h3>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <br>

        <div class="front-content-info">
            <li>
                <li class="front-content-text"><h3><img src="images/dot.png" style:"display: inline">Drive all around Melbourne</h3></li>
                <li class="front-content-text"><h3><img src="images/dot.png" style:"display: inline">Multiple Cars</h3></li>
                <li class="front-content-text"><h3><img src="images/dot.png" style:"display: inline">Multiple Locations</h3></li>
            </li>
        </div>


        <div class="divider"></div>
        <div>

        <div class="col-sm-12" style="margin: 25px; background-image:url('/images/c4.png')">
            <div class="panel" style="margin: 25px; background: transparent; color: white">
                <h3>Book Vehicles near you, Any hour of the day</h3>
                <br><button type="button" class="btn btn-warning">
                <a href="booking/create" >Book Now</a></button></div>
            </div>
        </div>

        <div class="col-sm-12" style="margin: 25px; background-image:url('/images/c4.png')">
            <div class="panel" style="margin: 25px; background: transparent; color: white">
                <h3>Wide Range of Cars, Get the right vehicle</h3>
                <br><button type="button" class="btn btn-warning">
                <a href="vehicles">View Vehicles</a></button></div>
            </div>
        </div>

        <div class="col-sm-12" style="margin: 25px; background-image:url('/images/c4.png')">
            <div class="panel" style="margin: 25px; background: transparent; color: white">
                <h3>Fuel, cleaning, rego and servicing included</h3>
                <br><button type="button" class="btn btn-warning">
                <a href="auth/register" >Join Now</a></button></div>
            </div>
        </div>

        </div>


        <!--

        <div class="container text-center">
          <h3>What We Do</h3><br>
          <div class="row">
            <div class="col-sm-4">
                <div class="panel" style="background: transparent; color: white;">
 <img src="/images/c4.png" class="img-responsive" style="width:100%" alt="Image">
                <h3>Book Vehicles near you, Any hour of the day</h3>
                <br><button type="button" class="btn btn-warning">
                <a href="booking/create" >Book Now</a></button></div>
                </div>


            </div>
            <div class="col-sm-4">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
              <p>Project 2</p>
            </div>
            <div class="col-sm-4">
                  <div class="well">
                   <p>Some text..</p>
                  </div>
                <div class="well">
                   <p>Some text..</p>
                </div>
            </div>
          </div>
        </div><br>



        <div class="col-sm-3" style="margin: 25px">
            <div class="panel" style="margin: 25px; background: transparent; color: white">
                <h3>Book Vehicles near you, Any hour of the day</h3>
                <br><button type="button" class="btn btn-warning">
                <a href="booking/create" >Book Now</a></button></div>
            </div>
        </div>

        <div class="col-sm-3" style="margin: 25px">
            <div class="panel" style="margin: 25px; background: transparent; color: white">
                <h3>Wide Range of Cars, Get the right vehicle</h3>
                <br><button type="button" class="btn btn-warning">
                <a href="vehicles">View Vehicles</a></button></div>
            </div>
        </div>

        <div class="col-sm-3" style="margin: 25px">
            <div class="panel" style="margin: 25px; background: transparent; color: white">
                <h3>Fuel, cleaning, rego and servicing included</h3>
                <br><button type="button" class="btn btn-warning">
                <a href="auth/register" >Join Now</a></button></div>
            </div>
        </div>
        <div class="row"></div>

        -->

@endsection
