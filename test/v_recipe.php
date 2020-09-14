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
      <h1 class="mt-4 mb-3">Feedback
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"> Feedback</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-10" src="images/Recipes/feedback.png" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Instructions</h2>
          <p>Our customers who have chosen to leave a review after purchasing from the Farm to home said their service is fast, professional and customer-centric. The products are genuine, trustworthy and had a wonderful shopping experience. Customers seemed particularly pleased with the hassle-free cashback processing.</p>
          <p> Name: <input type="text" name="name" value=" "><p>





<p> Comment: <textarea name="comment" rows="5" cols="40"></textarea><p>
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Post">


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
