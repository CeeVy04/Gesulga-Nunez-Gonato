<?php
	include 'config.php';

	$id = $_GET['id'];
	$sqlquery = "DELETE FROM raffle_draw WHERE id=$id";
	if (mysqli_query($conn,$sqlquery)) {
		 echo "<script> alert('Successfully Deleted'); window.location.href='admin.php';</script>";
	}
?>