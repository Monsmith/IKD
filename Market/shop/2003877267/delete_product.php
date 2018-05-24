<?php
include '../../../php/connectdb.php';
$deletepro  = "DELETE FROM product ";
$deletepro .= "WHERE product_id = '".$_GET["productid"]."'";
$deleteproQuery = mysqli_query($con,$deletepro);

if ($deleteproQuery) {
	echo "<script type ='text/javascript'>alert('ลบสินค้าสำเร็จ');window.location='product_manage.php'</script>";
		exit();
}

mysqli_close($con);
?>