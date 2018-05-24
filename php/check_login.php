<?php
	session_start();
	include 'connectdb.php';
	
	$strSQL = "SELECT * FROM user WHERE user_email = '".$_POST['txtemail-login']."' and user_password = '".$_POST['txtpass-login']."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "<script type ='text/javascript'>alert('อีเมลล์หรือรหัสผ่านไม่ถูกต้อง');window.location='../'</script>";
		exit();
	}else{
			$_SESSION["UserID"] = $objResult["user_id"];
			$_SESSION["Status"] = $objResult["user_status"];

			session_write_close();
			header("location:../community");
			
	}
	mysqli_close($con);
?>