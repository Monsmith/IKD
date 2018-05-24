<?php
	include '../../php/connectdb.php';

	$ChNaShop = "SELECT * FROM market_shop WHERE mks_name = '".$_POST['txtnameshop']."'";
	$ChNaShopQuery = mysqli_query($con,$ChNaShop);
	$ChNaShopResult = mysqli_fetch_array($ChNaShopQuery);

	if ($ChNaShopResult) {
		echo "<script type ='text/javascript'>alert('ชื่อร้านมีใช้งานแล้ว');window.location='../'</script>";
			exit();	
			echo "Error Save [" . $ChNaShopResult . "]";
	}else{
		

		$ranshopid = mt_rand(1000000000,mt_getrandmax());
		include 'select_shopid.php';
		while ($ShopidResult == $ranshopid){
			$ranshopid = mt_rand(1000000000,mt_getrandmax());
		}

		$upload = $_FILES['filUpload'];

		if($upload <> ''){
			$path = "../shop/".$ranshopid."/picture/"; 
			$type = strrchr($_FILES['filUpload']['name'],".");
			$ranpicture = mt_rand(1000000000,mt_getrandmax());
				include 'select_shoppic.php';
				while ($ShPicResult == $ranpicture){
					$ranpicture = mt_rand(1000000000,mt_getrandmax());
				}
			$newname = $ranpicture.$type;
			$path_copy = $path.$newname;
			$path_link = "../shop/".$ranshopid."/picture/".$newname;
		}
		$nameshop = $_POST["txtnameshop"];
		$shopCreate = mkdir("../shop/".$ranshopid);
		$jsCreate = mkdir("../shop/".$ranshopid."/js");
		$cssCreate = mkdir("../shop/".$ranshopid."/css");
		$iconCreate = mkdir("../shop/".$ranshopid."/icon");
		$phpCreate = mkdir("../shop/".$ranshopid."/php");
		$pictureCreate = mkdir("../shop/".$ranshopid."/picture");

		$shopjsCopy = copy("../create-shop/js/"."shopjs.js","../shop/".$ranshopid."/js/"."shopjs.js");

		$index_cssCopy = copy("../create-shop/css/"."index-shop.css","../shop/".$ranshopid."/css/"."index-shop.css");

		$icon_aboutCopy = copy("../create-shop/icon/"."About1.png","../shop/".$ranshopid."/icon/"."About1.png");
		$icon_aorderCopy = copy("../create-shop/icon/"."AOder1.png","../shop/".$ranshopid."/icon/"."AOder1.png");
		$icon_contact1Copy = copy("../create-shop/icon/"."Contact1.png","../shop/".$ranshopid."/icon/"."Contact1.png");
		$icon_CustomerCopy = copy("../create-shop/icon/"."Customer1.png","../shop/".$ranshopid."/icon/"."Customer1.png");
		$icon_MessageCopy = copy("../create-shop/icon/"."Message1.png","../shop/".$ranshopid."/icon/"."Message1.png");
		$icon_OrderCopy = copy("../create-shop/icon/"."Order1.png","../shop/".$ranshopid."/icon/"."Order1.png");
		$icon_PaymentCopy = copy("../create-shop/icon/"."Payment1.png","../shop/".$ranshopid."/icon/"."Payment1.png");
		$icon_PaymentMCopy = copy("../create-shop/icon/"."Promote1.png","../shop/".$ranshopid."/icon/"."Promote1.png");
		$icon_ProductCopy = copy("../create-shop/icon/"."Product1.png","../shop/".$ranshopid."/icon/"."Product1.png");
		$icon_StoreCopy = copy("../create-shop/icon/"."Store1.png","../shop/".$ranshopid."/icon/"."Store1.png");

		$icon_StoreCopy = copy("../create-shop/icon/"."icon-address.png","../shop/".$ranshopid."/icon/"."icon-address.png");
		$icon_StoreCopy = copy("../create-shop/icon/"."icon-description.png","../shop/".$ranshopid."/icon/"."icon-description.png");
		$icon_StoreCopy = copy("../create-shop/icon/"."icon-mail.png","../shop/".$ranshopid."/icon/"."icon-mail.png");
		$icon_StoreCopy = copy("../create-shop/icon/"."icon-phone.png","../shop/".$ranshopid."/icon/"."icon-phone.png");




		$select_shopCopy = copy("../create-shop/php/"."select_shop.php","../shop/".$ranshopid."/php/"."select_shop.php");
		$select_pro_shopCopy = copy("../create-shop/php/"."select_pro_shop.php","../shop/".$ranshopid."/php/"."select_pro_shop.php");
		$button_manageCopy = copy("../create-shop/php/"."button_manage.php","../shop/".$ranshopid."/php/"."button_manage.php");
		$categoryCopy = copy("../create-shop/php/"."category.php","../shop/".$ranshopid."/php/"."category.php");
		$productCopy = copy("../create-shop/php/"."product.php","../shop/".$ranshopid."/php/"."product.php");
		$product_priceCopy = copy("../create-shop/php/"."product_price.php","../shop/".$ranshopid."/php/"."product_price.php");
		$select_cateCopy = copy("../create-shop/php/"."select_cate.php","../shop/".$ranshopid."/php/"."select_cate.php");
		$select_categoryCopy = copy("../create-shop/php/"."select_category.php","../shop/".$ranshopid."/php/"."select_category.php");
		$select_category_proCopy = copy("../create-shop/php/"."select_category_pro.php","../shop/".$ranshopid."/php/"."select_category_pro.php");
		$select_proCopy = copy("../create-shop/php/"."select_pro.php","../shop/".$ranshopid."/php/"."select_pro.php");
		$select_productCopy = copy("../create-shop/php/"."select_product.php","../shop/".$ranshopid."/php/"."select_product.php");
		$update_cateCopy = copy("../create-shop/php/"."update_cate.php","../shop/".$ranshopid."/php/"."update_cate.php");
		$update_productCopy = copy("../create-shop/php/"."update_product.php","../shop/".$ranshopid."/php/"."update_product.php");


		$add_category_productCopy = copy("../create-shop/"."add_category_product.php","../shop/".$ranshopid."/"."add_category_product.php");
		$add_productCopy = copy("../create-shop/"."add_product.php","../shop/".$ranshopid."/"."add_product.php");
		$indexCopy = copy("../create-shop/"."index.php","../shop/".$ranshopid."/"."index.php");
		$nameCopy = copy("../create-shop/"."mks_nameshop.txt","../shop/".$ranshopid."/"."mks_nameshop.txt");
		$order_smCopy = copy("../create-shop/"."order_step_manage.php","../shop/".$ranshopid."/"."order_step_manage.php");
		$product_mCopy = copy("../create-shop/"."product_manage.php","../shop/".$ranshopid."/"."product_manage.php");
		$delete_categoryCopy = copy("../create-shop/"."delete_category.php","../shop/".$ranshopid."/"."delete_category.php");
		$delete_productCopy = copy("../create-shop/"."delete_product.php","../shop/".$ranshopid."/"."delete_product.php");
		$edit_categoryCopy = copy("../create-shop/"."edit_category.php","../shop/".$ranshopid."/"."edit_category.php");
		$edit_productCopy = copy("../create-shop/"."edit_product.php","../shop/".$ranshopid."/"."edit_product.php");
		$description_productCopy = copy("../create-shop/"."description_product.php","../shop/".$ranshopid."/"."description_product.php");

		$strFileName = "../shop/".$ranshopid."/"."mks_nameshop.txt";
		$objFopen = fopen($strFileName,'w');
		$strText = $nameshop;
		fwrite($objFopen,$strText);

		$strFileid = "../shop/".$ranshopid."/"."mks_idshop.txt";
		$idFopen = fopen($strFileid,'w');
		$idText = $ranshopid;
		fwrite($idFopen,$idText);

		

		
	
		$description = str_replace("\n","<br>\n",$_POST["txtdescription"]);
		if (move_uploaded_file($_FILES["filUpload"]["tmp_name"], "../shop/".$ranshopid."/picture/".$newname)) {
				include '../../php/connectdb.php';
			$strSQL = "INSERT INTO market_shop (mks_id,mks_name,mks_category,mks_tel,mks_email,mks_address,mks_road,mks_district,mks_area,mks_province,mks_post,mks_description,mks_picture,mks_user,mks_time,mks_date) VALUES ('".$ranshopid."','".$_POST["txtnameshop"]."','".$_POST["txtcategory"]."','".$_POST["txttel"]."','".$_POST["txtemail"]."','".$_POST["txtaddress"]."','".$_POST["txtroad"]."','".$_POST["txtdistrict"]."','".$_POST["txtarea"]."','".$_POST["txtprovince"]."','".$_POST["txtpost"]."','".$description."','".$newname."','".$_GET['UserID']."','".date("H:i:s")."','".date("Y-m-d")."')";
				$objQuery = mysqli_query($con,$strSQL);

				if ($objQuery) {
					echo "<script type ='text/javascript'>alert('สร้างร้านค้าสำเร็จ');window.location='../shop/$ranshopid'</script>";
					exit();	
				}
		}
	}
	


		
	mysqli_close($con);
?>