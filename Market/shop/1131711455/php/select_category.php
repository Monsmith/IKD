<?php

	$fileid = "mks_idshop.txt";
	$readid = fopen($fileid, 'r');
	$idshop = fgets($readid, 30);

	$strSQL    = "SELECT * FROM category_product WHERE mks_id = '".$idshop."'";
	$objQuery  = mysqli_query($con,$strSQL);
	

?>