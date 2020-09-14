
<?php

include 'config.php';

$uploadName = $_POST["uploadName"];
$uploadPrice = $_POST["uploadPrice"];
$upload_image=$_FILES[" uploadImage "][ "name" ];
$uploadDesc = $_POST["uploadDesc"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
