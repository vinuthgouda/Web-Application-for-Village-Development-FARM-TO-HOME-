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
      <h1 class="mt-4 mb-3">Home Delivery
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Home Delivery</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/Recipes/home.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Instructions</h2>
          <p>Farmer's Best is great!! Their products are always fresh, delivery is reliable and everyone we have come in contact with is very friendly and helpful. They offer much more than milk delivery. It feels good to buy such quality products locally. Home delivery is convenient and cost-effective. Consumers can have their ordered products delivered to their homes.</p>
          <p>The farmers themselves deliver the products ordered by the customers to their homes if the distance between them is not greater than 15 km. This facility thus increases the profit for the farmers and goods are delivered to the consumers free of cost. </p>
          <p> The consumers can pay the money directly to the farmer, who delivered the goods. Cash on delivery option is available and thus consumer can make their payment through cash.</p>
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
