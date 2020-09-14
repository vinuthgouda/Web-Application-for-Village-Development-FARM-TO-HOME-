<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarmToDesk BD</title>
	
    
	
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
      
	
  </head>
  <body>
	<?php
		include ('menu.php');
	?>
  
    <!-- Page Content -->
    <div class="container" style="margin-top:60px;">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">About Us
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About Us</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/aboutus.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2>What Makes Us Different</h2>
          <p>India has a reported population of 70% in rural India as per Census of India 2011 and depend on agriculture for income. Though growing crops is a major occupation for the people in rural villages, the profit they make is very less. The major problem faced by farmers is that of middle men, transportation and climate change. Technology is the only solution to all the problems faced by farmers. Development of an Website where the seller and buyer can directly communicate and finalize the deals. The availability of fertile land in villages is an important advantage for small growers and home makers to grow vegetables and fruits in small scale and sell the same.</p>
          <p>The present scenario is while selling his crops and products the farmer faces a lot of 3rd parties, which will decrease his profit. The major problem faced by farmers is that of middle men, transportation and climate change. </p>
          <p>Development of an Website where the seller and buyer can directly communicate and finalize the deals.  Many times the produce grown by villagers do not get proper selling price due to non-availability of markets or middle men. Our Webpage Sell Direct solves the problem by creating an interface between the villagers and the customers. The Website allows customer to place the order if the distance is within 15 km. </p>
        </div>
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
