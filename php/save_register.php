<?php
	include 'connectdb.php';
	
	if($_POST["txtpass"] != $_POST["txtconpass"])
	{
		echo "<script type ='text/javascript'>alert('รหัสผ่านไม่ถูกต้อง');window.location='../'</script>";
		exit();
	}
		$strSQL = "SELECT * FROM user WHERE user_email = '".trim($_POST['txtemail'])."'" ;
		$objQuery = mysqli_query($con,$strSQL);
		$objResult = mysqli_fetch_array($objQuery);
		if($objResult)
		{  
			echo "<script type ='text/javascript'>alert('อีเมลล์นี้มีใช้งานแล้ว');window.location='../'</script>";
			exit();	
		}
		else{	

			

			$upload = $_FILES['filUpload'];

			if($upload <> ''){
				$path = "../myfile/"; 
				$type = strrchr($_FILES['filUpload']['name'],".");
				$ranpicture = mt_rand(1000000000, mt_getrandmax());
					include 'select_userpicture.php';
					while ($objResultPicture == $ranpicture){
						$ranpicture = mt_rand(1000000000, mt_getrandmax());
					}
				$newname = $ranpicture.$type;
				$path_copy = $path.$newname;
				$path_link = "../myfile/".$newname;
			
			}
			if (move_uploaded_file($_FILES["filUpload"]["tmp_name"], "../myfile/". $newname))  {
					$strSQL = "INSERT INTO user (user_fname,user_lname,user_email,user_password,user_bday,user_gender,user_tel,user_picture,user_daccount,user_taccount) VALUES ('".$_POST["txtfirstname"]."','".$_POST["txtlastname"]."','".$_POST["txtemail"]."','".$_POST["txtpass"]."','".$_POST["txtbday"]."','".$_POST["txtgender"]."','".$_POST["txttel"]."','".$newname."','".date("Y-m-d")."','".date("H:i:s")."')";
					$objQuery = mysqli_query($con,$strSQL);
				
				if ($objQuery) {
					echo "<script type ='text/javascript'>alert('สร้างบัญชีผู้ใช้สำเร็จ');window.location='../'</script>";
					exit();	
				}
			}
			
			
		}

	mysqli_close($con);
?>