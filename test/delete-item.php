<?php

include 'config.php';

$id = $_GET['id']; // $id is now defined

		// or assuming your column is indeed an int
		// $id = (int)$_GET['id'];

		$mysqli->query("DELETE FROM products WHERE id='".$id."'");
			
		mysqli_close($mysqli);
		header("Location: mainadmin.php");
?>