<?php
	

	$fileid = "mks_idshop.txt";
	$readid = fopen($fileid, 'r');
	$idshop = fgets($readid, 30);

	$proshopSQL    = "SELECT * FROM market_shop WHERE mks_id = '".$idshop."'";
	$proshopQuery  = mysqli_query($con,$proshopSQL);
	$proshopResult = mysqli_fetch_array($proshopQuery);
?>