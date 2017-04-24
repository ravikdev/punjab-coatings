@extends('layouts.master')
@section('content')

              <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class=".carimg">
                   <img src="images/paint-cans.jpg" alt="New York">
                  </div>
                  <div class="carousel-caption">
                    <h3>Offset pre-press chemicals</h3>
                    <p>The atmosphere in New York is lorem ipsum.</p>
                  </div> 
                </div>

                <div class="item">
                 
                  <img src="images/paint-cans.jpg" alt="Chicago">
                  <div class="carousel-caption">
                    <h3>Printing inks </h3>
                    <p>Thank you, Chicago - A night we won't forget.</p>
                  </div> 
                </div>


                 <div class="item">
                  <img src="images/paint-cans.jpg" alt="Los Angeles">
                  <div class="carousel-caption">
                    <h3>Industrial chemicals</h3>
                    <p>Even though the traffic was a mess, we had the best time.</p>
                  </div> 
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
              <!-- Coursol end here -->


        <div class="container homepage text-center">
     <span class="bar"> <h2>PUNJAB COATING<br>THE PRINTER CHOISE.....</h2></span>
            <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
         <i class="fa fa-globe fa-5x" aria-hidden="true" ></i>
          <h3>About us</h3>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="https://www.google.co.in/" role="button">Start learning &raquo;</a></p>
        </div>
        <div class="col-md-4">
        <span class="glyphicon glyphicon1 glyphicon-tint"></span>
          <h3>Our Products</h3>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">Join the initiative &raquo;</a></p>
       </div>
        <div class="col-md-4">
           <i class="fa fa-spinner fa-spin fa-5x fa-fw "></i>
           <span class="sr-only">Loading...</span>
          <h3>Services</h3>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">Give support &raquo;</a></p>
        </div>
      </div>
     </div>
@stop