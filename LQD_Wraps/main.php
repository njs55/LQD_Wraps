<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'head.php';
    ?>
  </head>

  <body>
      <div>
      <!-- NAVBAR========================== -->
      <?php include 'navBar.php';?>

      <!-- Carousel================================================== -->
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
               <img src="images/DSC03115.jpg" alt="Chania">
               <div class="carousel-caption">
               <h1>LQD Wraps</h1>
               <p>Lets reinvent your cars image!</p>
            </div>
         </div>
         
         <div class="item">
            <img src="images/mazda.jpg" alt="Chania">
            <div class="carousel-caption">
               <h1>LQD Wraps</h1>
               <p>Mazda Shop Car</p>
            </div>
         </div>
         
            <div class="item">
               <img src="images/camaro2.jpeg" alt="Flower">
               <div class="carousel-caption">
                  <h1>LQD Wraps</h1>
                  <p>Camaro Shop Car</p>
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
      </div><!-- /.carousel -->


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Marketing -->
      <?php include 'pricingWarrantyCare.php';?>
   
      <div class="container marketing">      
         <!-- START THE FEATURETTES -->
         
         <fieldset class="featurette-divider center">
            <legend>Our Dip Features of the Month!</legend>
         </fieldset>
   
         <div class="row featurette">
            <div class="col-md-7">
               <h2 class="featurette-heading">Andrei's E90 M3 <span class="text-muted">With a High Gloss finish using TopCoat</span></h2>
               <p class="lead">This new TopCoat product not only makes the dip much more durable, but can also be used to achieve a high gloss OEM finish.</p>
            </div>
            <div class="col-md-5">
               <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="images/e90m3.jpg" alt="Generic placeholder image">
            </div>
         </div>
   
         <hr class="featurette-divider">
   
         <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
               <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">WRX Wagon with a Satin Finish</span></h2>
               <p class="lead">One of our more recent jobs was on a WRX Wagon using a black pearl mixed in topcoat with a satin finish.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
               <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="images/wrxwagon.jpg" alt="Generic placeholder image">
            </div>
         </div>
   
         <hr class="featurette-divider">
   
         <div class="row featurette">
            <div class="col-md-7">
               <h2 class="featurette-heading">Ryan's Mazda 3!<span class="text-muted">With a nice color shift effect</span></h2>
               <p class="lead">This is the Atlantic ColorShift Pearl mixed into TopCoat with a satin finish.</p>
            </div>
            <div class="col-md-5">
               <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="images/mazda3.jpg" alt="Generic placeholder image">
            </div>
         </div>
   
         <hr class="featurette-divider">
   
         <!-- /END THE FEATURETTES -->
   
   
         <!-- FOOTER -->         
         <footer class="container">
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2015 LQD Wraps, LLC. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
         </footer>
   
      </div><!-- /.container -->


    <!-- Bootstrap core JavaScript================================= -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include 'bootCoreJS.php';?>
    
  </body>
</html>
