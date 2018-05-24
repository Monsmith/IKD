<?php

	$fileid = "mks_idshop.txt";
	$readid = fopen($fileid, 'r');
	$idshop = fgets($readid, 30);

	$proSQL    = "SELECT * FROM product WHERE mks_id = '".$idshop."'";
	$proQuery  = mysqli_query($con,$proSQL);
	
	

?>