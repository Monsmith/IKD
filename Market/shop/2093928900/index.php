<?php include '../../../php/check_user.php'; ?>
<!DOCTYPE html>
<html lang="th">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iKingdom</title>

    <!-- Bootstrap core CSS -->

    <script src="../../../jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    
    
    <link ... rel="stylesheet" type="text/css" href="../../css/index-market.css?v=1008">
    <link ... rel="stylesheet" type="text/css" href="css/index-shop.css?v=106">

    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

  </head>

  <body>
      <?php include '../../../php/connectdb.php';
            include '../../../php/select_userid.php';
       ?>
        <nav class="navbar navbar-expand-lg nav-bg-market sticky-top">
          <div class="nav-menu-left">
             <a class="navbar-brand js-scroll-trigger text-white" href="../../../Market"><h4><strong>iKingdom Market</strong></h4></a>
           </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
                  <div class="nav-menu-right">
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <img src="../../../icon/icon-cart.png" class="img-fluid navbar-icon" alt="Responsive image">
                        </li>&nbsp&nbsp&nbsp&nbsp
                        <li class="nav-item">
                          <img src="../../../icon/icon-megaphone.png" class="img-fluid navbar-icon" alt="Responsive image" ><span class="badge badge-danger">4</span>
                        </li>&nbsp&nbsp
                        <li class="nav-item">
                          <button type="button" class="btn btn-outline-light" onclick="window.location='../../../community/service.php'">บริการ iKingdom</button>
                        </li>&nbsp&nbsp
                        <li class="nav-item"> 
                      <div class="btn-group">
                      <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../../../myfile/<?php echo $objResult["user_picture"]; ?>" width="30px" height="auto">&nbsp<a><?php echo $objResult["user_fname"]; ?>&nbsp&nbsp<?php echo $objResult["user_lname"]; ?></a>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">ร้านค้า</button>
                        <button class="dropdown-item" type="button" onclick="window.location='../../../community/setting.php'">แก้ไขข้อมูลส่วนตัว</button>
                        <button class="dropdown-item" type="button" onclick="window.location='../../../php/logout.php'">ออกจากระบบ</button>
                      </div>
                    </div>
                    </li>
                  </ul>
                </div>
              </div>
              </nav><br>

              
              <div class="row">
                <div class="col-2">
                  

                </div>
                <div class="col-8">
                  <div class="row">
                    <div class="col-3">
                      <?php include 'php/select_shop.php'; ?>
                      <?php include 'php/select_pro_shop.php'; ?>
                       <img src="picture/<?php echo $proshopResult['mks_picture']; ?>" class="rounded border border-dark picture-pro-m"> 
                    </div>
                    <div class="col-4">
                     <h1><?php echo $proshopResult['mks_name']; ?></h1><br>

                     <?php if(!$objResult) { ?>
                       <button type="button" class="btn btn-outline-primary">+ ติดตาม</button>&nbsp
                      <button type="button" class="btn btn-outline-primary">ส่งข้อมความ</button>
                     
                     <?php } ?>


                    </div>
                    <div class="col-5">
                      <div class="tab-content">
                        
                          <p><img src="icon/icon-phone.png" class="icon-pro-shop">&nbsp:&nbsp<a><?php echo $proshopResult['mks_tel']; ?></a></p>
                          <p><img src="icon/icon-mail.png" class="icon-pro-shop">&nbsp:&nbsp<a><?php echo $proshopResult['mks_email']; ?></a></p>
                          <p><img src="icon/icon-address.png" class="icon-pro-shop">&nbsp:&nbsp<a><?php echo $proshopResult['mks_area']; ?>&nbsp&nbsp<?php echo $proshopResult['mks_province']; ?>&nbsp&nbsp<?php echo $proshopResult['mks_post']; ?></a></p>
                          
                      </div> 
                    </div>
                  </div><br>
                  <div class="des-shop" role="alert">
                    <dir class="container">
                      <img src="icon/icon-description.png" class="icon-pro-shop">&nbspรายละเอียดแบบย่อ :&nbsp<hr>
                      <?php echo $proshopResult['mks_description']; ?>
                    </dir>  
                  </div>
                </div>
                <div class="col-2">
                  

                </div>
              </div>
              


              <hr>
               <div class="row">
                <div class="col-2">
                  

                </div>
                <div class="col-8">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" aria-selected="true">หน้าหลัก</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" aria-selected="false">วิธีการสั่งซื้อ</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" aria-selected="false">แจ้งชำระเงิน</a>
                      <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact2" aria-selected="false">รีวิวร้านค้า</a>
                      <a class="nav-item nav-link" id="nav-contact-tab3" data-toggle="tab" href="#nav-contact3" aria-selected="false">เกี่ยวกับเรา</a>
                      <a class="nav-item nav-link" id="nav-contact-tab4" data-toggle="tab" href="#nav-contact4" aria-selected="false">ติดต่อเรา</a>
                      <?php include 'php/button_manage.php' ?>
                      

                    </div>
                  </nav>
                </div>
                <div class="col-2">
                  

                </div>
              </div>
              
              <hr>    
                 
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="row">
                        <div class="col-2 " id="menu-in">
                          <div class="alert " role="alert">
                            <b>ค้นหาสินค้า</b>
                          </div>
                          <form >
                            <center><input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <br>
                            <input class="btn" type="submit" value="ค้นหา" id="search-button"></center>
                          </form><hr>
                          <div class="alert" role="alert">
                            <b>หมวดหมู่สินค้า</b>
                          </div>
                          <div class="nav nav-bg-color flex-column"> 
                             <a class="nav-link menu-font active" id="nav-pills" data-toggle="tab" href="#v-pills-all">&nbsp&nbsp&nbspสินค้าทั้งหมด</a>
                             <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-new">&nbsp&nbsp&nbspสินค้ามาใหม่</a>
                             <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-recommend">&nbsp&nbsp&nbspสินค้าแนะแนะ</a>
                             <?php
                              include '../../../php/connectdb.php';
                              $fileid = "mks_idshop.txt";
                              $readid = fopen($fileid, 'r');
                              $idshop = fgets($readid, 30);

                              $cateid    = "SELECT * FROM category_product WHERE mks_id = '".$idshop."'";
                              $cateidQuery  = mysqli_query($con,$cateid);
                              
                             while ($cateidResult = mysqli_fetch_array($cateidQuery)) {?>
                                <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-<?php echo $cateidResult['category_product_id']; ?>">&nbsp&nbsp&nbsp<?php echo $cateidResult['category_name']; ?></a>


                            <?php
                             }
                             ?>

                             <a><hr></a>

                          </div>
                        </div>

                        
                        <div class="col-8">
                          <div class="tab-content">
                            <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                              <div class="alert alert-primary" role="alert">
                                <b>สินค้าทั้งหมด</b><br>
                              </div>
                              

                                <div class="row">
                                  <?php

                                $fileid = "mks_idshop.txt";
                                $readid = fopen($fileid, 'r');
                                $idshop = fgets($readid, 30);
                                $showproduct   = "SELECT * FROM product WHERE mks_id = '".$idshop."'";
                                $showproductQuery  = mysqli_query($con,$showproduct);
                                ;
                               while ($showproductResult = mysqli_fetch_array($showproductQuery)) { ?>
                                  <div class="col-4">

                                      <div class="card">
                                        <img class="card-img-top pic-product" src="picture/<?php echo $showproductResult['picture_pro']; ?>" alt="Card image cap">
                                        <div class="card-body">
                                          <center><h5 class="card-title"><?php echo $showproductResult['name_pro']; ?></h5></center>
                                          <center><p class="card-text"><?php echo $showproductResult['des1_pro']; ?></p></center>

                                            <?php 
                                              if ($showproductResult['discount_pro'] == "nddis") {?>
                                                    <center><p><b class="card-text"><?php echo $showproductResult['price_pro']; ?>&nbspบาท</b></p></center>
                                        <?php }if($showproductResult['discount_pro'] == "percen") {
                                                    $percen = 0;
                                                    $price = $showproductResult['price_pro'];
                                                    $dis = $showproductResult['discount'];
                                                    $percen = ($price*$dis)/100;
                                                    $priceend = $price-$percen;
                                                   ?>
                                                 <center><strike><p class="card-text">ราคาปกติ : <?php echo $price; ?>&nbspบาท</p></strike></center>
                                                 <center><p class="card-text">ราคาคงเหลือ : <b><?php echo $priceend; ?>&nbspบาท</b></p></center>
                                                <center><p class="card-text">ส่วนลด : <?php echo $dis; ?>&nbsp%</p></center>

                                          <?php }if($showproductResult['discount_pro'] == "price") {
                                                    
                                                    $price = $showproductResult['price_pro'];
                                                    $dis = $showproductResult['discount'];
                                                    $priceend = $price-$dis;

                                           ?>
                                               <center><strike><p class="card-text">ราคาปกติ : <?php echo $price; ?>&nbspบาท</p></strike></center>
                                                     <center><p class="card-text">ราคาคงเหลือ : <b><?php echo $priceend; ?>&nbspบาท</b></p></center>
                                                    <center><p class="card-text">ส่วนลด : <?php echo $dis; ?>&nbspบาท</p></center>
                                            <?php } ?>

                                            <br>
                                            <center>
                                            <button type="button" class="btn btn-danger" onclick="window.location='description_product.php?productid=<?php echo $showproductResult['product_id']; ?>'">รายละเอียด</button>
                                            <button type="button" class="btn btn-success">ใส่ตะกร้า</button>
                                          </center>
                                        </div>
                                        <div class="card-footer">
                                          <center><small class="text-muted">จำนวนสินค้า <?php echo $showproductResult['number_pro']; ?>&nbsp<?php echo $showproductResult['unit_pro']; ?></small></center>
                                        </div>
                                      </div><br>
                                  </div>
                                <?php } ?>


                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-new">
                              <div class="alert alert-primary" role="alert" role="tabpanel" aria-labelledby="v-pills-new-tab">
                                <b>สินค้าใหม่</b>
                              </div>
                              <div class="row">

                                  <?php 
                                    $new = "new";
                                    $showproductnew   = "SELECT * FROM product WHERE mks_id = '".$idshop."' AND cate = '".$new."'";
                                    $showproductQuery  = mysqli_query($con,$showproductnew);
                                    ;
                                  while ($showproductnewResult = mysqli_fetch_array($showproductQuery)) { 
                                      

                                  ?>
                                  <div class="col-4">

                                      <div class="card">
                                        <img class="card-img-top pic-product" src="picture/<?php echo $showproductnewResult['picture_pro']; ?>" alt="Card image cap">
                                        <div class="card-body">
                                          <center><h5 class="card-title"><?php echo $showproductnewResult['name_pro']; ?></h5></center>
                                          <center><p class="card-text"><?php echo $showproductnewResult['des1_pro']; ?></p>
                                        </div></center>
                                        <div class="card-footer">
                                          <center><small class="text-muted">Last updated <?php echo $showproductnewResult['date_pro']; ?></small></center>
                                        </div>
                                      </div><br>
                                  </div>
                                <?php } ?>
                            </div>
                          </div>
                            <div class="tab-pane fade" id="v-pills-recommend" role="tabpanel" aria-labelledby="v-pills-recommend-tab">
                              <div class="alert alert-primary" role="alert">
                                <b>สินค้าแนะนำ</b>
                              </div>
                            </div>
                            <?php
                              include '../../../php/connectdb.php';
                              $fileid = "mks_idshop.txt";
                              $readid = fopen($fileid, 'r');
                              $idshop = fgets($readid, 30);

                              $cateid2    = "SELECT * FROM category_product WHERE mks_id = '".$idshop."'";
                              $cateid2Query  = mysqli_query($con,$cateid2);
                              
                             while ($cateid2Result = mysqli_fetch_array($cateid2Query)) {?>

                                <div class="tab-pane fade" id="v-pills-<?php echo $cateid2Result['category_product_id']; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $cateid2Result['category_product_id']; ?>-tab">
                                  <div class="alert alert-primary" role="alert">
                                    <b><?php echo $cateid2Result['category_name']; ?></b>
                                  </div>
                                </div>


                            <?php
                             }
                             ?>


                          </div>
                        </div>
                        <div class="col-2">
                    

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="row">
                        <div class="col-2">
                        2

                        </div>
                        <div class="col-8">

                        </div>
                        <div class="col-2">
                  

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <div class="row">
                        <div class="col-2">
                          3
                        </div>
                        <div class="col-8">

                        </div>
                        <div class="col-2">
                  

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
                      <div class="row">
                        <div class="col-2">
                          4
                        </div>
                        <div class="col-8">

                        </div>
                        <div class="col-2">
                  

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact3" role="tabpanel" aria-labelledby="nav-contact-tab3">
                      <div class="row">
                        <div class="col-2">
                          5
                        </div>
                        <div class="col-8">

                        </div>
                        <div class="col-2">
                  

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact4" role="tabpanel" aria-labelledby="nav-contact-tab3">
                      <div class="row">
                        <div class="col-2">
                        6
                        </div>
                        <div class="col-8">

                        </div>
                        <div class="col-2">
                  

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact5" role="tabpanel" aria-labelledby="nav-contact-tab5">
                      <div class="row">
                        <div class="col-2">
                          
                        </div>
                        <div class="col-8">
                          <center>
                            <h3>จัดการหน้าร้าน</h3>
                            <hr>
                              <table>
                                <tr>
                                  <td><center><a href="order_step_manage"><img class="icon-managment" src="icon/Order1.png"></a></center></td>
                                  <td><center><img class="icon-managment" src="icon/Promote1.png"></center></td>
                                  <td><center><img class="icon-managment" src="icon/About1.png"></center></td>
                                  <td><center><img class="icon-managment" src="icon/Contact1.png"></center></td>
                                </tr>
                                <tr>
                                    <td><center>จัดการวิธีการสั่งซื้อ</center></td>
                                    <td><center>โปรโมทร้านค้า</center></td>
                                    <td><center>จัดการเกี่ยวกับเรา</center></td>
                                    <td><center>จัดการติดต่อเรา</center></td>

                                </tr>
                              </table>

                            
                            <hr>
                            <h3>จัดการหลังร้าน</h3>
                            <hr>
                             <table>
                                <tr>
                                  <td><center><a href="product_manage.php"><img class="icon-managment" src="icon/Product1.png"></center></td>
                                  <td><center><img class="icon-managment" src="icon/AOder1.png"></center></td>
                                  <td><center><img class="icon-managment" src="icon/Payment1.png"></center></td>
                                  <td><center><img class="icon-managment" src="icon/Message1.png"></center></td>
                                </tr>
                                <tr>
                                    <td><center>จัดการสินค้า</center></td>
                                    <td><center>จัดการรายการสั่งซื้อ</center></td>
                                    <td><center>จัดการชำระเงิน</center></td>
                                    <td><center>จัดการข้อความ</center></td>

                                </tr>
                                
                                <tr>
                                  <td><center><img class="icon-managment" src="icon/Customer1.png"></center></td>
                                  <td><center><img class="icon-managment" src="icon/Store1.png"></center></td>
                                </tr>
                                <tr>
                                    <td><center>จัดการลูกค้า</center></td>
                                    <td><center>จัดการคลังสินค้า</center></td>

                                </tr>
                              </table>
                          </center>
                        </div>
                        <div class="col-2">
                  

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <br>
    <footer class="page-footer">
      <span class="d-block p-2" id="color-footer-market">
        d-block
      </span>
      <span class="d-block p-2 bg-white text-black">
        d-block
      </span>
    </footer>
  </body>
</html>