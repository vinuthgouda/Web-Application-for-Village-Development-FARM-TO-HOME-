<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
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
      <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
	
  </head>
  <body>

<?php
		include ('menu.php');
	?>


    <div class="row" >
      <div class="large-12">
        <h3 style="margin-top:100px;text-align:center;">Active Users</h3>
        <hr>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="margin-top:20px;width:40%;margin-left:30%;">
		<table id="myTable" class="table table-active">
			<tr class="header">
				<th style="width:60%;">Name</th>
				<th style="width:60%;">ID</th>
				<th style="width:60%;">Address</th>
				<th style="width:40%;">City</th>
				<th style="width:60%;">Email</th>
				<th style="width:60%;">Remove User</th>
				
			</tr>
  
        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query('SELECT * FROM users');
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
			  echo '<tr>';
              echo '<td>'.$obj->fname.'</td>';
			  echo '<td>'.$obj->id.'</td>';
			  echo '<td>'.$obj->address.'</td>';
			  echo '<td>'.$obj->city.'</td>';
			  echo '<td>'.$obj->email.'</td>';
              
			  echo '<td><a href="delete-user.php?id=' .$obj->id. '"><button>Delete</button></a>';
			  echo '</td>';
		  
			  echo'</tr>';

            }
          }
        ?>
		</table>
      </div>
    </div>




    <div class="row" style="margin-left:60px;">
      <div class="small-12">

        

      </div>
    </div>
<?php
		include ('footer.php');
	?>
	<script>
		function myFunction() {
		  var input, filter, table, tr, td, i;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("myTable");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			  } else {
				tr[i].style.display = "none";
			  }
			}       
		  }
		}
		</script>

	
	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
