<?php
	$con 	= mysqli_connect("localhost","root","","sispak");

		$sql	= mysqli_query($con, "SELECT * FROM data_training WHERE Class='Berbakat'");
		$row	= mysqli_num_rows($sql);
	$add	= mysqli_query($con, "INSERT INTO tabel_class_berbakat  VALUES ('".$row."')");
?>

