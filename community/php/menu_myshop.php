
<?php

$myshop = "SELECT * FROM market_shop WHERE mks_user = '".$_SESSION["UserID"]."'";
$myshopQuery   = mysqli_query($con,$myshop);
?>

<div class="row">

<?php while ($myshopResult = mysqli_fetch_array($myshopQuery)) {
		$shopfoid = $myshopResult["mks_id"];
      $shopfoname = $myshopResult["mks_name"]; 
      $picproname = $myshopResult["mks_picture"];
      ?>

                         <button class="dropdown-item btn nav-left-bar" type="button" onclick="window.location='../Market/shop/<?php echo $shopfoid; ?>'"><img class="pic-menu-myshop" src="../Market/shop/<?php echo $shopfoid; ?>/picture/<?php echo $myshopResult["mks_picture"]; ?>">
                          <?php echo $myshopResult["mks_name"]; ?></button>

<?php } ?>

</div>