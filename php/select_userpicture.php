<?php
	$strSQLPicture    = "SELECT * FROM user WHERE user_picture";
	$objQueryPicture  = mysqli_query($con,$strSQLPicture);
	$objResultPicture = mysqli_fetch_array($objQueryPicture);
?>