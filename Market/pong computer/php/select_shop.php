<?php
	
	$filename = "mks_nameshop.txt";
	$readname = fopen($filename, 'r');
	$nameshop = fgets($readname, 30);

	$strSQL    = "SELECT * FROM market_shop WHERE mks_user = '".$_SESSION['UserID']."' AND mks_name = '".$nameshop."'";
	$objQuery  = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);

	

?>