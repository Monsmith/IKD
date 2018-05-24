<?php

	$fileid = "mks_idshop.txt";
	$readid = fopen($fileid, 'r');
	$idshop = fgets($readid, 30);

	$cateid    = "SELECT * FROM category_product WHERE mks_id = '".$idshop."' AND category_product_id = '".$_GET['categoryid']."'";
	$cateQuery  = mysqli_query($con,$cateid);
	$cateResult = mysqli_fetch_array($cateQuery);
	
	

?>