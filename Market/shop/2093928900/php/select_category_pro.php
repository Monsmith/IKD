<?php

	$fileid = "mks_idshop.txt";
	$readid = fopen($fileid, 'r');
	$idshop = fgets($readid, 30);

	$catproSQL    = "SELECT * FROM category_product WHERE mks_id = '".$idshop."'";
	$catproQuery  = mysqli_query($con,$catproSQL);
	

?>