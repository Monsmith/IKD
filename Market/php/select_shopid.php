<?php
	$Shopid = "SELECT * FROM market_shop";
	$ShopidQuery = mysqli_query($con,$Shopid);
	$ShopidResult = mysqli_fetch_array($ShopidQuery);

?>