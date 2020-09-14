<?php

if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(!isset($_SESSION['username']))
{
    echo '<script>location="login.php";</script>';
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmToHome BD</title>
	
    
	
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
	
  </head>
  <body>

	<?php
		include ('menu.php');
	?>
     
   <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://4.bp.blogspot.com/-vVwts_Gm3E4/Tw60ENzdj0I/AAAAAAAACYA/MVODoc5ASO4/s1600/IMG_7417.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="yellow">Good Food Everyday</font></h3>
              <p><font color="yellow">Directly From Your Local Farm</font></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://www.theindependentbd.com/assets/news_images/Fish-bonanza.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="green">Good health</font></h3>
              <p><font color="green">Sufficient quantities and various types of nutritional food</font></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://4.bp.blogspot.com/-vVwts_Gm3E4/Tw60ENzdj0I/AAAAAAAACYA/MVODoc5ASO4/s1600/IMG_7417.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="yellow">Food Like This</font></h3>
              <p><font color="yellow">Stay Healthy, Stay HWebsitey</font></p>
            </div>
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
    </header>
	
	 <div class="container">

      <h1 class="my-4">Welcome to Farm to Home</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">What Makes Us Different</h4>
            <div class="card-body">
              <p class="card-text">We bring farmers produce items directly from farmers to your house</p>
            </div>
            <div class="card-footer">
              <a href="aboutus.php" class="btn btn-primary">Read Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Farmers and Us</h4>
            <div class="card-body">
              <p class="card-text"> Development of an Website where the seller and buyer can directly communicate and finalize the deals. Our Webpage Sell Direct solves the problem by creating an interface between the villagers and the customers. The Website allows customer to place the order if the distance is within 15 km. </p>
            </div>
            <div class="card-footer">
              <a href="Farmers.php" class="btn btn-primary">Read Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Fresh Food</h4>
            <div class="card-body">
              <p class="card-text"> A consistent diet that includes fresh foods will provide a person with more energy, both physically and emotionally, and a healthier lifestyle overall.</p>
            </div>
            <div class="card-footer">
              <a href="Fresh.php" class="btn btn-primary">Read Details</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Some Groceries For You</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="https://bizimages.withfloats.com/actual/5a682811cc0e340b741a2f07.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="rice.php">Basmati</a>
              </h4>
              <p class="card-text">Basmati is a variety of long, slender-grained aromatic rice which is traditionally from the Indian subcontinent. As of 2018-19, India exported to over 90% of the overseas basmati rice market, while Pakistan accounted for the remainder. Many countries use domestically grown basmati rice crops.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="https://farm7.staticflickr.com/6210/6053072848_25b5411ca1_b.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="vegetable.php">Daal</a>
              </h4>
              <p class="card-text">Dal Lentils are a staple ingredient in cuisines from the Indian subcontinent. Clockwise from upper right: split red lentils, common green whole lentils, and Le Puy lentils. Whole lentils have their outer coats visible.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="320px" src="images\products\bagun.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="vegetable">Brinjal</a>
              </h4>
              <p class="card-text">Eggplant, aubergine, or brinjal is a plant species in the nightshade family Solanaceae. Solanum melongena is grown worldwide for its edible fruit.  As a member of the genus Solanum, it is related to tomato and potato.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="images\products\tomato.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="vegetable.php">Tomato</a>
              </h4>
              <p class="card-text">The tomato is the edible, often red, berry of the plant Solanum lycopersicum, commonly known as a tomato plant. The species originated in western South America and Central America. The Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="images\products\kharif.jpg"  alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="meat.php">Crops</a>
              </h4>
              <p class="card-text">A crop is a plant or animal product that can be grown and harvested extensively for profit or subsistence. Crop may refer either to the harvested parts or to the harvest in a more refined state. Most crops are cultivated in agriculture or aquaculture. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" height="300px" src="images\products\rice1.jpg"  alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Rice</a>
              </h4>
              <p class="card-text"> Rice is the seed of the grass species Oryza sativa or Oryza glaberrima. As a cereal grain, it is the most widely consumed staple food for a large part of the world's human population, especially in Asia. It is the agricultural commodity with the third-highest worldwide production, after sugarcane and maize.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      
      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="products.php">Go Shopping!</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        

      </div>
    </div>
	<?php
		include ('footer.php');
	?>


	
	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
      


    </script>
  </body>
</html>
