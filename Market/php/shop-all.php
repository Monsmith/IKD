
<?php

$myshop = "SELECT * FROM market_shop";
$myshopQuery   = mysqli_query($con,$myshop);
?>

<div class="row">

<?php while ($myshopResult = mysqli_fetch_array($myshopQuery)) {

      $shopfoname = $myshopResult["mks_name"]; 
      $picproname = $myshopResult["mks_picture"];
      $shopid = $myshopResult["mks_id"];
      ?>

                         <div class="col-sm-4" >
                          <div class="card card-outline-primary rounded border-primary btn-outline-primary">
                            <div class="card-block" >
                              <center><img class = "picture-pro" src="shop/<?php echo $shopid ?>/picture/<?php echo $picproname ?>"></center><br>
                              <center><h4><?php echo $myshopResult["mks_name"]; ?></h4></center>
                              <center><a href="shop/<?php echo $shopid ?>" class="btn btn-success">ไปร้านค้า</a></center><br>
                            </div>
                          </div><br>
                        </div>

<?php } ?>

</div>