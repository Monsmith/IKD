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
		include '../../../../php/connectdb.php';
		$product = "SELECT * FROM category_product WHERE category_picture" ;
		$product_picQuery = mysqli_query($con,$product);
		$product_picResult = mysqli_fetch_array($product_picQuery);
			

			

			$upload = $_FILES['filUpload'];

			if($upload != ''){
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

						$updateproSQL = "UPDATE category_product ";
						$updateproSQL .= "SET mks_id = '".$idshop."',category_name = '".$_POST['category']."',category_picture = '".$newname."' WHERE category_product_id = '".$_GET["categoryid"]."'";
						$updateproQuery = mysqli_query($con,$updateproSQL);
					
					if ($updateproQuery) {
						echo "<script type ='text/javascript'>alert('บันทึกหมวดหมู่สินค้าสำเร็จ');window.location='../product_manage.php'</script>";
						exit();	
					}else {
						echo "<script type ='text/javascript'>alert('บันทึกหมวดหมู่สินค้าไม่สำเร็จ');window.location='../product_manage.php'</script>";
						exit();	
					}
				}
			
		}	
	

	mysqli_close($con);
?>