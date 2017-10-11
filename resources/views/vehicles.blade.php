@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <!-- Vehicles -->
    <legend>Ducky Cars</legend>
        
 <div class="container">
        <div class="row">

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="Audi">Audi</button>
            <button class="btn btn-default filter-button" data-filter="Hyundai">Hyundai</button>
            <button class="btn btn-default filter-button" data-filter="Kia">Kia</button>
            <button class="btn btn-default filter-button" data-filter="Toyota">Toyota</button>
            <button class="btn btn-default filter-button" data-filter="Suzuki">Suzuki</button>            
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Audi">
                <a href="v1">
                    <img src="images/Audi A1.jpg" class="img-responsive">
                </a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Hyundai">
                <a href="v2">
                <img src="/images/hyundai i30 wagon.jpg" class="img-responsive">
                </a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Kia" >
                <a href="v3">
                <img src="/images/Kia Sportage.png" class="img-responsive">
                </a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Toyota">
                <a href="v4">
                <img src="/images/Toyota Yaris.png" class="img-responsive">
                </a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Toyota" >
                <a href="v5">
                <img src="/images/Toyota Corolla.jpg" class="img-responsive">
                </a>
            </div>
            
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Suzuki">
                <a href="v6">
                <img src="/images/Suzuki Swift.jpg" class="img-responsive">
                </a>
            </div>
    </div>
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
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>   


@endsection
