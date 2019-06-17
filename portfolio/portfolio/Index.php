<?php 
include 'header.php';
?>
  
<div class="container bg-secondary">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

          </ol>
      <div class="carousel-inner" style="width: 100%;">
          <div class="carousel-item active">
          <img class="d-block w-100 img-fluid center-block align-middle" src="img/setup.jpg" alt="First slide" id="img1">
          </div>
          <div class="carousel-item img-fluid center-block align-middle">
          <img class="d-block w-100" src="img/coffee.jpg" alt="Second slide"id="img2">
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
      </div>
    <h1 class="display-1 d-flex justify-content-center ">Over mij</h1>
    <div class="text-center">
      <img src="img/ik.png" class="rounded" alt="...">
    </div>
    <p class="text-lg-left d-flex justify-content-center">Mijn naam is Justin van Zon en welkom op mijn portfolio website.</p>




<!-- Page Content -->
<div class="container">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 text-light">Opdracht gallery</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" id='myImg' src="opdrachten/screenshot_1.png" alt="">
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" id='myImg2' src="opdrachten/screenshot_3.png" alt="">
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" id='myImg3' src="opdrachten/screenshot_2(1).png" alt="">
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" id='myImg4' src="opdrachten/screenshot_5.png" alt="">
    </div>

  </div>
</div>




<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<!-- /.container -->


<?php 
include "footer.php";
?>