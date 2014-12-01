@extends('layout')

@section('title')
	<title>Home</title>
@stop

@section('slider')
<div id="myCarousel" class="carousel slide">
   <!-- Carousel indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- Carousel items -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="/bootstrap/images/slide1.png" alt="First slide">
      </div>
      <div class="item">
         <img src="/bootstrap/images/slide2.png" alt="Second slide">
      </div>
      <div class="item">
         <img src="/bootstrap/images/slide3.png" alt="Third slide">
      </div>
   </div>
   <!-- Carousel nav -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 
@stop

@section('content')
    <h1>Próximamente</h1>
@stop
