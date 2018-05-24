<?php 
                      $fileid = "mks_idshop.txt";
                      $readid = fopen($fileid, 'r');
                      $idshop = fgets($readid, 30);

                      
                      $Shopmanage = "SELECT * FROM market_shop";
                      $ShopmanageQuery = mysqli_query($con,$Shopmanage);
                      
                       
                        while($ShopmanageResult = mysqli_fetch_array($ShopmanageQuery)) {
                        if($_SESSION["UserID"] == $ShopmanageResult["mks_user"]){ 
                            if($idshop == $ShopmanageResult["mks_id"]){?>
                              <a class="nav-item nav-link" id="nav-contact-tab5" data-toggle="tab" href="#nav-contact5" aria-selected="false">จัดการร้าน</a>
                      <?php 
                        }
                        }      
                      } 
                      ?>