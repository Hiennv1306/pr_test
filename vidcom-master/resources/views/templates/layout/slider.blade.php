<?php
	$slider = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();

?>
@if(isset($slider))
<main role="main" class="main">
		
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{'public/images/slider.jpg'}}" alt="First slide">
                 <div class="container">
                    <div class="carousel-caption text-sl">
                        <h1>WELCOME TO OUR SPA </h1>
                       	<h2>CHECK OUT OUT SERVICES AND OFFERS</h1>
                        <p><a style="margin-right: 30px; " class="btn btn-lg btn-primary" href="#" role="button">Learn more</a> <a  style="margin-left: 30px;" class="btn btn-lg btn-primary" href="#" role="button">Book now</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{'public/images/slider.jpg'}}" alt="Second slide">
               
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{'public/images/slider.jpg'}}" alt="Third slide">
               
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</main>
	
 @endif