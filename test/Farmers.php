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
      <h1 class="mt-4 mb-3">Farmers and Us
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Farmers and Us</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/farmers.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Farmers</h2>
          <p>A farmer is a person engaged in agriculture, raising living organisms for food or raw materials. The term usually applies to people who do some combination of raising field crops, orchards, vineyards, poultry, or other livestock. A farmer might own the farmed land or might work as a laborer on land owned by others, but in advanced economies, a farmer is usually a farm owner, while employees of the farm are known as farm workers, or farmhands.</p>
          <p>The major problem faced by farmers is that of middle men, transportation and climate change. Technology is the only solution to all the problems faced by farmers. Development of an App where the seller and buyer can directly communicate and finalize the deals. The availability of fertile land in villages is an important advantage for small growers and home makers to grow vegetables and fruits in small scale and sell the same.</p>
        
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
