<?php
	$strSQL    = "SELECT * FROM user WHERE user_id = '" . $_SESSION['UserID'] . "' ";
	$objQuery  = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>