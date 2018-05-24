<?php
include '../../../php/connectdb.php';
$deletepro  = "DELETE FROM category_product ";
$deletepro .= "WHERE category_product_id = '".$_GET["categoryid"]."'";
$deleteproQuery = mysqli_query($con,$deletepro);

if ($deleteproQuery) {
	echo "<script type ='text/javascript'>alert('ลบหมวดหมู่สินค้าสำเร็จ');window.location='product_manage.php'</script>";
		exit();
}

mysqli_close($con);
?>