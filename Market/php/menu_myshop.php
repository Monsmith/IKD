
<?php

$myshop = "SELECT * FROM market_shop WHERE mks_user = '".$_SESSION["UserID"]."'";
$myshopQuery   = mysqli_query($con,$myshop);
?>



<?php while ($myshopResult = mysqli_fetch_array($myshopQuery)) {
		$shopfoid = $myshopResult["mks_id"];
      $shopfoname = $myshopResult["mks_name"]; 
      $picproname = $myshopResult["mks_picture"];
      ?>

          <button class="dropdown-item" type="button" onclick="window.location='shop/<?php echo $shopfoid; ?>'"><img class="pic-menu-myshop" src="shop/<?php echo $shopfoid; ?>/picture/<?php echo $picproname ?>">
          <?php echo $myshopResult["mks_name"]; ?></button>
                              

<?php } ?>

