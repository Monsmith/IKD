<?php

	$fileid = "mks_idshop.txt";
	$readid = fopen($fileid, 'r');
	$idshop = fgets($readid, 30);

	$productid    = "SELECT * FROM product WHERE mks_id = '".$idshop."' AND product_id = '".$_GET['productid']."'";
	$productidQuery  = mysqli_query($con,$productid);
	$productidResult = mysqli_fetch_array($productidQuery);
	
	

?>