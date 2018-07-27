<?php
 $nama = $_POST['nama'];
 $usia = $_POST['usia'];
 $JK = $_POST['JK'];
 $TB = $_POST['TB'];
 $TD = $_POST['TD'];
 $BB = $_POST['BB'];
 $RL = $_POST['RL'];
 $LTBT = $_POST['LTBT'];
 $LT = $_POST['LT'];
 $LBB = $_POST['LBB'];
 $LK = $_POST['LK'];
 $L40M = $_POST['L40M'];
 $MFT = $_POST['MFT'];
 $a = "Ideal";
 $b = "Tidak Ideal";
 $con 	= mysqli_connect("localhost","root","","sispak");
 
	if ($usia <=12 && $usia >= 11) { 
		echo "--------------------------------------------------------------------------------------<br>";
		echo "Selamat $nama Dapat Mengecek Bakat Sepak Bola<br>";
		echo "--------------------------------------------------------------------------------------<br>";
	}else{
		echo "--------------------------------------------------------------------------------------<br>";
		echo "Maaf  $nama Tidak Dapat Mengecek Bakat Sepak Bola<br>";
		echo "--------------------------------------------------------------------------------------<br>";
	}

	
	if ($usia <=12 && $usia >= 11) {
		if ( $JK == "Perempuan"){
			echo "<br>";
				if($TB <= 155 && $TB >=145){
					echo " Tinggi Badan = Ideal  <br><br>";
					$TB = $a;
				}else{
					echo " Tinggi Badan = Tidak Ideal <br><br>";
					$TB = $b;}

					if ($TD >= 55 && $TD <=75){
						echo " Tinggi Duduk = Ideal <br><br>";
						$TD = $a;
					}else{
						echo " Tinggi Duduk = Tidak Ideal <br><br>";
						$TD = $b;
					}
								
							if ($BB >= 35 && $BB <= 40){
								echo "  Berat Badan = Ideal <br><br>";
								$BB = $a;
							}else{
								echo "  Berat Badan = Tidak Ideal  <br><br>";
								$BB = $b;
							}
							
								if ($RL >= 125 && $RL <=150){
									echo " Rentang Lengan = Ideal <br><br>";
									$RL = $a;
								}else{
									echo " Rentang Lengan = Tidak Ideal <br><br>";
									$RL = $b;
								}
				
									if ($LTBT <=14 && $LTBT >= 10){
									echo " Lempar Tangkap Bola Tenis = Ideal <br><br>";
									$LTBT = $a;
									}else{
										echo " Lempar Tangkap Bola Tenis = Tidak Ideal <br><br>";
										$LTBT = $b;
									}

										if ($LT <=34 && $LT >= 29){
										echo " Loncat Tegak = Ideal <br><br>";
										$LT = $a;
										}else{
											echo " Loncat Tegak = Tidak Ideal <br><br>";
											$LT = $b;
										}

											if ($LBB <= 4.35 && $LBB >= 3.5){
											echo " Lempar Bola Basket = Ideal <br><br>";
											$LBB = $a;
											}else{
												echo " Lempar Bola Basket = Tidak Ideal <br><br>";
												$LBB = $b;
											}

												if ($LK <=22.24 && $LK >= 19.76){
												echo " Lari Kelincahan = Ideal <br><br>";
												$LK = $a;
												}else{
													echo " Lari Kelincahan = Tidak Ideal  <br><br>";
													$LK = $b;
												}

													if ($L40M <= 7.76 && $L40M >= 6.82){
													echo " Lari 40 Meter = Ideal <br><br>";
													$L40M = $a;
													}else{
														echo " Lari 40 Meter = Tidak Ideal <br><br>";
														$L40M = $b;
													}

														if ($MFT <= 7.1 && $MFT >= 5.2){
														echo " Multistage Fitness Test = Ideal <br><br>";
														$MFT = $a;
														}else{
															echo " Multistage Fitness Stage = Tidak Ideal <br><br>";
															$MFT = $b;
														}
					
		}else if( $JK == "Laki - Laki"){
						if($TB <= 158 && $TB >=148){
							echo " Tinggi Badan = Ideal <br><br>";
							$TB = $a;
						}else{
							echo " Tinggi Badan = Tidak Ideal <br><br>";
							$TB = $b;
						}
	
						if ($TD >= 60 && $TD <=85){
							echo " Tinggi Duduk = Ideal <br><br>";
							$TD = $a;
						}else{
							echo " Tinggi Duduk = Tidak Ideal <br><br>";
							$TD = $b;
						}
									
						if ($BB >= 37 && $BB <= 45){
							echo " Berat Badan = Ideal <br><br>";
							$BB = $a;
						}else{
							echo " Berat Badan = Tidak Ideal <br><br>";
							$BB = $b;
						}
							
						if ($RL >= 130 && $RL <=150){
							echo " Rentang Lengan = Ideal <br><br>";
							$RL = $a;
						}else{
							echo " Rentang Lengan = Tidak Ideal <br><br>";
							$RL = $b;
						}
						
						if ($LTBT <=16 && $LTBT >= 12){
							echo " Lempar Tangkap Bola Tenis = Ideal <br><br>";
							$LTBT = $a;
						}else{
							echo " Lempar Tangkap Bola Tenis = Tidak Ideal <br><br>";
							$LTBT = $b;
						}

						if ($LT <=38 && $LT >= 33){
							echo " Loncat Tegak = Ideal <br><br>";
							$LT = $a;
						}else{
							echo " Loncat Tegak = Tidak Ideal <br><br>";
							$LT = $b;
						}

						if ($LBB <= 5.05 && $LBB >= 4.35){
							echo " Lempar Bola Basket = Ideal <br><br>";
							$LBB = $a;
						}else{
							echo " Lempar Bola Basket = Tidak Ideal <br><br>";
							$LBB = $b;
						}

						if ($LK <= 20.71 && $LK >= 18.03 ){
							echo " Lari Kelincahan = Ideal <br><br>";
							$LK = $a;
						}else{
							echo " Lari Kelincahan = Tidak Ideal <br><br>";
							$LK = $b;
						}

						if ($L40M <=7.59 && $L40M >= 6.79){
							echo " Lari 40 Meter = Ideal <br><br>";
							$L40M = $a;
						}else{
							echo " Lari 40 Meter = Tidak Ideal <br><br>";
							$L40M = $b;
						}

						if ($MFT <= 8.7 && $MFT >= 6.5){
							echo " Multistage Fitness Test = Ideal <br><br>";
							$MFT = $a;
						}else{
							echo " Multistage Fitness Test = Tidak Ideal   <br><br>";
							$MFT = $b;
						}
					}

				
				
					$jum = 1;
					$o = mysqli_query($con, "SELECT * FROM tabel_class_berbakat");
					$p = mysqli_fetch_array($o);
					$p['0']; 
					$nilai = array($TB,$TD,$BB,$RL,$LTBT,$LT,$LBB,$LK,$L40M,$MFT);
					for ($i=0; $i<=count($nilai)-1; $i++){
						if ($nilai[$i] == $a){
							$query = mysqli_query($con, "SELECT * FROM tabel_ideal_berbakat");
							$data = mysqli_fetch_array($query);
								 $data[$i]/$p['0']; 
					
						}else {
							$query = mysqli_query($con, "SELECT * FROM tabel_tidak_ideal_berbakat");
							$data = mysqli_fetch_array($query);
								 $data[$i]/$p['0'];  

							}
						$jum *= ($data[$i]/$p['0']);
					}
					$m = number_format($jum,5);
					echo "--------------------------------------------------------------------------------------<br>";
					echo  "Probability Berbakat Sepak Bola   = ".$m."<br>";
					echo "--------------------------------------------------------------------------------------<br><br>";



					$jum = 1;
					$q = mysqli_query($con, "SELECT * FROM tabel_class_tidak_berbakat");
					$r = mysqli_fetch_array($q);
					$r['0']; 
					$nilai = array($TB,$TD,$BB,$RL,$LTBT,$LT,$LBB,$LK,$L40M,$MFT);
					for ($i=0; $i<=count($nilai)-1; $i++){
						if ($nilai[$i] == $a){
							$query = mysqli_query($con, "SELECT * FROM tabel_ideal_tidak_berbakat");
							$data = mysqli_fetch_array($query);
								  number_format($data[$i]/$r['0'],5); 

						}else {
							$query = mysqli_query($con, "SELECT * FROM tabel_tidak_ideal_tidak_berbakat");
							$data = mysqli_fetch_array($query);
								 number_format($data[$i]/$r['0'],5); 


							}
						$jum *= ($data[$i]/$r['0']);
					}
					$w = number_format($jum,5);
					echo "--------------------------------------------------------------------------------------<br>";
					echo  "Probability Tidak Berbakat Sepak Bola   = ".$w."<br>";
					echo "--------------------------------------------------------------------------------------<br><br>";

                    
					if ($m > $w){
						echo "--------------------------------------------------------------------------------------<br>";
						echo "Hasil Diagnosa Bakat Sepak Bola : $nama Berbakat Sepak Bola<br>";
						echo "--------------------------------------------------------------------------------------<br><br>";
					}else{
						echo "--------------------------------------------------------------------------------------<br>";
						echo "Hasil Diagnosa Bakat Sepak Bola : $nama Tidak Berbakat Sepak Bola<br>";
						echo "--------------------------------------------------------------------------------------<br><br>";
					}
				}

?>