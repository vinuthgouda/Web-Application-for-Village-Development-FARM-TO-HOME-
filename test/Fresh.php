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
      <h1 class="mt-4 mb-3">Fresh Food
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"> Fresh Food</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/fresh.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Fresh Food</h2>
          <p>Unhealthy eating habits have contributed to the obesity epidemic in the United States: about one-third of U.S. adults (33.8%) are obese and approximately 17% (or 12.5 million) of children and adolescents aged 2—19 years are obese.1 Even for people at a healthy weight, a poor diet is associated with major health risks that can cause illness and even death. These include heart disease, hypertension (high blood pressure), type 2 diabetes, osteoporosis, and certain types of cancer. By making smart food choices, you can help protect yourself from these health problems. </p>
          <p>The link between good nutrition and healthy weight, reduced chronic disease risk, and overall health is too important to ignore. By taking steps to eat healthy, you'll be on your way to getting the nutrients your body needs to stay healthy, active, and strong.  </p>
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
