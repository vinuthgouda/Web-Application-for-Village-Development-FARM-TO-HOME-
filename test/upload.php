<?php

if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(!isset($_SESSION['username']))
{
    echo '<script>location="login.php";</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Admin - Farm To Desk</title>
    <!-- Bootstrap Core CSS -->
    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="admin/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="admin/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="admin/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="admin/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
 <?php
		include ('menu.php');
	?>
        </div>
        <!-- End header header -->
		<?php
			if(isset($_POST['upload'])){
				
				$db = mysqli_connect("localhost","root","","farmtodesk");

				
				$Name = $_POST["Name"];
				$Code = $_POST["Code"];
				$Desc = $_POST["Desc"];
				$qty = $_POST["qty"];
				$Price = $_POST["Price"];
				$Category = $_POST["Category"];
				$image = $_FILES['image']['name'];
				
				$target = "images/products/".basename($image);
				
				$sql = "INSERT INTO products(product_code,product_name,product_desc, product_img_name, qty, price, category) VALUES ('$Code','$Name','$Desc','$image','$qty','$Price','$Category')";
				mysqli_query($db, $sql);
				move_uploaded_file($_FILES['image']['tmp_name'], $target);
				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					$msg = "Image uploaded successfully";
				}else{
					$msg = "Failed to upload image";
				}
			}
		?>
		<script language="javascript" type="text/javascript">
			function getPath() {
			var Form = document.forms['forming'];
			var inputName = Form.elements['file1'].value;

			var imgPath = inputName;
			Form.elements['file_src'].value = imgPath;
			}
		</script>
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a  href="admin.html" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Website Upload </span></a>
                        </li>
                        <li> <a  href="admin_rorders.html" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Recent Orders </span></a>
                        </li>  
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Website Upload</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- Website Uploads -->
                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <!-- column -->
                    <h3>&nbsp; Product Upload</h3>
                    <div class="col-lg-12">
                        <form method="POST" action="upload.php" name ="forming" enctype="multipart/form-data" >
                          <div class="form-group row">
                            <label for="Food_Name" class="col-sm-3 col-form-label">Food Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="Food_name" name ="Name" placeholder="Item Name">
                            </div>
                          </div>
						  <div class="form-group row">
                            <label for="Food_Desc" class="col-sm-3 col-form-label">Food Code</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="Food_Desc" name ="Code" placeholder="Item Name">
                            </div>
                          </div>
						  <div class="form-group row">
                            <label for="Food_Name" class="col-sm-3 col-form-label">Food Desc</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="Food_name" name ="Desc" placeholder="Item Name">
                            </div>
                          </div>
						  <div class="form-group row">
                            <label for="Food_Name" class="col-sm-3 col-form-label">Food Quantity</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="Food_name" name ="qty" placeholder="Item Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="Price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="Food_name" name ="Price" placeholder="BDT">
                            </div>
                          </div>
						   <div class="form-group row">
                            <label for="Price" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="Food_name" name ="Category" placeholder="BDT">
                            </div>
                          </div>
                            <div class="form-group row">
                            <div class="col-sm-2">Image Upload</div>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="file" id="gridCheck1" name ="image">
                                <label class="form-check-label" for="gridCheck1">
                                  Image
                                </label>
                              </div>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <div class="col-sm-10" >
                              <button type="submit" onSubmit="getPath();" class="btn btn-primary" name="upload">Upload</button>
                            </div>
                          </div>
                        </form>
                    </div>
                    
                   
                    </div>
                
                


                    <!-- Recent Orders -->
                               
                    <!--<div class="col-lg-9">
                        <div class="card">
                            <div class="card-title">
                                <h4>Recent Orders </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Product</th>
                                                <th>quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="images/avatar/4.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>John Abraham</td>
                                                <td><span>iBook</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="images/avatar/2.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>John Abraham</td>
                                                <td><span>iPhone</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="images/avatar/3.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>John Abraham</td>
                                                <td><span>iMac</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="images/avatar/4.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>John Abraham</td>
                                                <td><span>iBook</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


               
							<!-- /# card -->
						</div>
					

				    


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php
		include ('footer.php');
	?>
            <!-- End footer -->
       
        <!-- End Page wrapper  -->
    
    <!-- End Wrapper -->
	
    <!-- All Jquery -->
    <script src="admin/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="admin/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="admin/js/lib/morris-chart/raphael-min.js"></script>
    <script src="admin/js/lib/morris-chart/morris.js"></script>
    <script src="admin/js/lib/morris-chart/dashboard1-init.js"></script>


	<script src="admin/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="admin/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="admin/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="admin/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="admin/js/lib/calendar-2/pignose.init.js"></script>

    <script src="admin/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="admin/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="admin/js/scripts.js"></script>
    <!-- scripit init-->

    <script src="admin/js/custom.min.js"></script>

</body>

</html>