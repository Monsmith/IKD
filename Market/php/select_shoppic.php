<?php
	$ShPic = "SELECT * FROM market_shop WHERE mks_picture";
	$ShPicQuery = mysqli_query($con,$ShPic);
	$ShPicResult = mysqli_fetch_array($ShPicQuery);
?>