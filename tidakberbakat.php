<?php
	$con 	= mysqli_connect("localhost","root","","sispak");

		$sql	= mysqli_query($con, "SELECT * FROM data_training WHERE Class='Tidak Berbakat'");
		$row	= mysqli_num_rows($sql);
	$add	= mysqli_query($con, "INSERT INTO tabel_class_tidak_berbakat  VALUES ('".$row."')");
?>