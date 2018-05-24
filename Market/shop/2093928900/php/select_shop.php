<?php
	
	$fileid = "mks_idshop.txt";
	$readid = fopen($fileid, 'r');
	$idshop = fgets($readid, 30);

	$strSQL    = "SELECT * FROM market_shop WHERE mks_user = '".$_SESSION['UserID']."' AND mks_id = '".$idshop."'";
	$objQuery  = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);

	

?>