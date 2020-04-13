<?php
	include('config.php');
	$id=$_GET['id'];
	mysqli_query($mysqli,"delete from products where id='$id'");
	header('location:all.php');
?>