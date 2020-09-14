<?php
echo '<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">';
echo '<div class="container">';
echo '<a class="navbar-brand" href="index.php">';
echo 'Farm To Home';
echo '</a>';
echo '<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">';
echo '<span class="navbar-toggler-icon">';
echo '';
echo '</span>';
echo '</button>';
echo '<div class="collapse navbar-collapse" id="navbarResponsive">';
echo '<ul class="navbar-nav ml-auto">';
echo '<li class="nav-item">';
echo '<li class="nav-item dropdown">';
echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
echo 'Market';
echo '</a>';
echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">';
echo '<a class="dropdown-item" href="meat.php">';
echo 'Crops Market';
echo '</a>';
echo '<a class="dropdown-item" href="rice.php">';
echo 'Rice Market';
echo '</a>';
echo '<a class="dropdown-item" href="vegetable.php">';
echo 'Vegetable Market';
echo '</a>';
echo '<a class="dropdown-item" href="fish.php">';
echo 'Fish Market';
echo '</a>';
echo '</div>';
echo '</li>';
echo '<li class="nav-item dropdown">';
echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
echo 'About Us';
echo '</a>';
echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">';
echo '<a class="dropdown-item" href="p_recipe.php">';
echo 'Home Deliery';
echo '</a>';
echo '<a class="dropdown-item" href="v_recipe.php">';
echo 'Feedback';
echo '</a>';
echo '</div>';
echo '</li>';
echo '<a class="nav-link" href="orders.php">';
if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "admin@farmtoHome.com"){
				echo '<a class="nav-link" href="sendOrder.php">';
				echo "Shipments";}

				else{
					echo '<a class="nav-link" href="orders.php">';
					echo "My Orders";
				}
			}
			else{
				echo '<a class="nav-link" href="orders.php">';
				echo "My Orders";
			}
echo '</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="cart.php">';
echo 'View Cart';
echo '</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="contact.php">';
echo 'Contact Us';
echo '</a>';
echo '</li>';
echo "<li class='nav-item dropdown'>";
			echo  "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownBlog' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
			if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "admin@farmtoHome.com"){
				echo "Admin";}
				else if($_SESSION['username'] == "mainadmin@farmtoHome.com"){
				echo "Administrator";}
				else 
					echo "My Account";
				
			}
			else{
				
				echo "Login";
			}
			echo "</a>";
			echo "<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownBlog'>";
			if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "admin@farmtoHome.com"){
					echo "<a class ='dropdown-item' href='account.php'>";
					echo "Update Quantity";
					echo "</a>";
					echo "<a class ='dropdown-item' href='upload.php'>";
					echo "Upload Product";
					echo "</a>";
					echo "<a class ='dropdown-item' href='logout.php'>";
					echo "Logout";
					echo "</a>";
				}
			else if($_SESSION['username'] == "mainadmin@farmtoHome.com")
				{
					echo "<a class ='dropdown-item' href='manageuser.php'>";
					echo "Manage User";
					echo "</a>";
					echo "<a class ='dropdown-item' href='manageproduct.php'>";
					echo "Manage Product";
					echo "</a>";
					echo "<a class ='dropdown-item' href='logout.php'>";
					echo "Logout";
					echo "</a>";
				}
			else{
					echo "<a class ='dropdown-item' href='account.php'>";
					echo "Edit Profile";
					echo "</a>";
					echo "<a class ='dropdown-item' href='logout.php'>";
					echo "Logout";
					echo "</a>";
			}
		}
		else{
				echo "<a class ='dropdown-item' href='login.php'>";
				echo "Sign In";
				echo "</a>";
				echo "<a class ='dropdown-item' href='register.php'>";
				echo "Sign Up";
				echo "</a>";
			}
			
			echo "</div>";
echo '</li>';
echo '';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</nav>';
?>