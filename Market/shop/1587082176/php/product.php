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
	
		$product = "SELECT * FROM product WHERE picture_pro" ;
		$product_picQuery = mysqli_query($con,$product);
		$product_picResult = mysqli_fetch_array($product_picQuery);
			


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
			$des1 = str_replace("\n","<br>\n",$_POST['des1_pro']);
			$des2 = str_replace("\n","<br>\n",$_POST['des2_pro']);
			if (move_uploaded_file($_FILES["filUpload"]["tmp_name"], "../picture/". $newname))  {
					$productSQL = "INSERT INTO product (mks_id,category_product_id,name_pro,color_pro,size_pro,weight_pro,brand_pro,gen_pro,condition_pro,picture_pro,des1_pro,des2_pro,price_pro,discount_pro,discount,number_pro,unit_pro,date_pro,time_pro,cate) VALUES ('".$idshop."','".$_POST['cate_pro']."','".$_POST['name_pro']."','".$_POST['color_pro']."','".$_POST['size_pro']."','".$_POST['weight_pro']."','".$_POST['brand_pro']."','".$_POST['gen_pro']."','".$_POST['condition_pro']."','".$newname."','".$des1."','".$des2."','".$_POST['price_pro']."','".$_POST['discount_pro']."','".$_POST['discount']."','".$_POST['number_pro']."','".$_POST['unit_pro']."','".date("Y-m-d")."','".date("H:i:s")."','".$_POST['cate']."')";
					$productQuery = mysqli_query($con,$productSQL);
				
				if ($productQuery) {
					echo "<script type ='text/javascript'>alert('บันทึกสินค้าสำเร็จ');window.location='../product_manage.php'</script>";
					exit();	
				}else {
					echo "<script type ='text/javascript'>alert('บันทึกสินค้าไม่สำเร็จ');window.location='../product_manage.php'</script>";
					exit();	
				}
			}
			
		}	
	

	mysqli_close($con);
?>