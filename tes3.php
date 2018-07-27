<?php
	$con 	= mysqli_connect("localhost","root","","sispak");
	$ideal	= array("TB", "TD", "BB", "RL", "LTBT", "LT", "LBB", "LK", "L40M", "MFT");
	$a 		= array();

	for($i=0; $i<=count($ideal)-1; $i++){
		$sql	= mysqli_query($con, "SELECT data_training.$ideal[$i] FROM data_training WHERE $ideal[$i]='Tidak Ideal' AND Class='Tidak Berbakat'");
		$row	= mysqli_num_rows($sql);
		$a[$ideal[$i]] = $row;
	}
	$add	= mysqli_query($con, "INSERT INTO tabel_tidak_ideal_tidak_berbakat (TB, TD, BB, RL, LTBT, LT, LBB, LK, L40M, MFT)
									VALUES ('".$a['TB']."', '".$a['TD']."', '".$a['BB']."', '".$a['RL']."', '".$a['LTBT']."', '".$a['LT']."', '".$a['LBB']."', '".$a['LK']."', '".$a['L40M']."', '".$a['MFT']."')");
?>