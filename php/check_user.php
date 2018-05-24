<?php
	session_start();
	if ($_SESSION['UserID'] == "") {
	    echo "<script type ='text/javascript'>alert('กรุณาเข้าสู่ระบบ');window.location='../'</script>";
		exit();
	}if($_SESSION['Status'] != "user")
	{
		echo "<script type ='text/javascript'>alert('คุณไม่ได้อยู่ในสถานะผู้ใช้งาน');window.location='../'</script>";
		exit();
	} 
?>