<?php
session_start();

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


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
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
	
  </head>
  <body>

	<?php
		include ('menu.php');
	?>

  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="margin-top:100px;width:40%;margin-left:30%;">

    <div class="row" >
      <div class="large-12">
        <?php
          $promocode = 0;
           
              
            //echo $promocode

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table id="myTable">';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Code</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                    
                echo '<tr>';
                echo '<td>'.$obj->product_name.'</td>';
				echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }
              
//          
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $db = mysqli_connect('localhost', 'root', '', 'farmtodesk');

                
                    $promoid = mysqli_real_escape_string($db,$_POST['promoid']);

                    $sql = "SELECT promo_value FROM promo WHERE promocode ='$promoid'";
                    $result = mysqli_query($db,$sql);
                    $row = mysqli_fetch_assoc($result);
                  



                    $promocode = $row["promo_value"];
 }
                
           

            $subtotal = 0;
          echo '<tr>';
          echo '<td colspan="3" align="right">Subtotal</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';
              
          echo '<tr>';
          echo '<td colspan="3" align="right">Discount(s)</td>';
          echo '<td>'.$promocode.'</td>';
          echo '</tr>';
              
              $subtotal = $total - $promocode;
              
          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$subtotal.'</td>';
          echo '</tr>';
          
              
           
          echo '<tr>';
		  $shipping = isset($_SESSION["shipping"]) ? strtolower($_SESSION["shipping"]): "Normal";
          echo '<td><form method="GET" action="update-cart.php"><H4> Shipping Method </H4><input type="radio" name="shipping" value="Normal" '.($shipping == "Normal" ? "checked='checked'":"").'> 3 Working Days (Free) <br><input type="radio" name="shipping" value="Express" '.($shipping == "Express" ? "checked='checked'":"").'> 1 Working Day Express Shipping (500 BDT)<br><button type="submit" class="btn" value="Update Shipping">Update Shipping</button><input type="hidden" name="action" value="shipping"><input type="hidden" name="id" value="'.$product_id.'"></form></td>';
          echo '</tr>';
          echo '</br>';
              
              
          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
              
      
          echo '<form method ="post" action="cart.php">
          <p><b>Promo Code (if applicable)</b></p>
          <input type="text" name="promoid">
          <p><font size="1.5">Enter your 5 Digit Code to reedem your discount</font></p>
          <button type="submit" class="btn" name="promo_code">Add Promo</button>
          <br></form>';
           
      
        
              
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>
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
