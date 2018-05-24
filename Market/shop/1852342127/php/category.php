<?php
	session_start();
	include '../../../../php/connectdb.php';

	$fileid = "../mks_idshop.txt";
	$readid = fopen($fileid, 'r');
	$idshop = fgets($readid, 30);

	$strSQL    = "SELECT * FROM market_shop WHERE mks_user = '".$_SESSION['UserID']."' AND mks_id = '".$idshop."'";
	$objQuery  = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if ($objResult) {
		
	
	
		$category_pic = "SELECT * FROM category_product WHERE category_picture" ;
		$category_picQuery = mysqli_query($con,$category_pic);
		$category_picResult = mysqli_fetch_array($category_picQuery);
			


			$upload = $_FILES['filUpload'];

			if($upload <> ''){
				$path = "../picture/"; 
				$type = strrchr($_FILES['filUpload']['name'],".");
				$ranpicture = mt_rand(1000000000, mt_getrandmax());
					while ($product_picResult == $ranpicture.$type){
						$ranpicture = mt_rand(1000000000, mt_getrandmax());
					}
				$newname = $ranpicture.$type;
				$path_copy = $path.$newname;
				$path_link = "../picture/".$newname;
			
			}
			if (move_uploaded_file($_FILES["filUpload"]["tmp_name"], "../picture/". $newname))  {
					$catSQL = "INSERT INTO category_product (category_name,mks_id,category_picture) VALUES ('".$_POST['category']."','".$idshop."','". $newname."')";
					$catQuery = mysqli_query($con,$catSQL);
				
				if ($catQuery) {
					echo "<script type ='text/javascript'>alert('สร้างบัญหมวดหมู่สินค้าสำเร็จ');window.location='../product_manage.php'</script>";
					exit();	
				}
			}
			
	}		
	

	mysqli_close($con);
?>