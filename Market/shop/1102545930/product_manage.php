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
    <link ... rel="stylesheet" type="text/css" href="css/index-shop.css?v=1022">

    

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

            <center><img src="../../icon/product-manage/product-manage.png" class="rounded-circle icon-h"><h2>จัดการสินค้า</h2></center>
            <hr class="hr-m">
              <?php include 'php/select_pro_shop.php'; ?>
              <div class="container">
                <button type="button" class="btn add" onclick="window.location='add_category_product.php'">+ เพิ่มหมวดหมู่</button>&nbsp&nbsp
                <button type="button" class="btn add" onclick="window.location='add_product.php'">+ เพิ่มสินค้า</button>
                <button type="button" class="btn btn-outline-danger back" onclick="window.location='../<?php echo $proshopResult["mks_id"]; ?>'">หน้าร้าน</button><br>
                <hr>
                <div class="row">
                  <div class="col-5">
                    <center><h5>หมวดหมู่สินค้า</h5></center>
                    <?php include'php/select_category.php'; ?>
                    <table class="table" width="100%">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" width="10%"><center>ลำดับ</center></th>
                          <th scope="col" width="35%"><center>รูป</center></th>
                          <th scope="col" width="40%"><center>หมวดหมู่</center></th>
                          <th scope="col" width="15%"><center>แก้ไข</center></th>
                          <th scope="col" width="10%"><center>ลบ</center></th>
                        </tr>
                      </thead>
                      <?php 
                      $i = 0;
                      while ($objResult = mysqli_fetch_array($objQuery)) { 
                        $i++;
                        ?>
                      <tbody>
                        <tr>
                          
                            <th scope="row"><center><?php echo $i; ?></center></th>
                            <td><center><img class="cate-product" src="picture/<?php echo $objResult['category_picture']; ?>"></center></td>
                            <td><center><?php echo $objResult['category_name']; ?></center></td>
                            <td><center><a href="JavaScript:if(confirm('ยืนยันการแก้ไขหมวดหมู่สินค้า?') == true){window.location='edit_category.php?categoryid=<?php echo $objResult['category_product_id']; ?>';}">แก้ไข</a></center></td>
                            <td><center><a href="JavaScript:if(confirm('ยืนยันการลบหมวดหมู่สินค้า?') == true){window.location='delete_category.php?categoryid=<?php echo $objResult['category_product_id']; ?>';}">ลบ</a></center></td>

                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

                    

                  </div>
                  <div class="col-7">
                    <center><h5>สินค้า</h5></center>
                    <?php include'php/select_product.php'; ?>
                    <table class="table" width="100%">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" width="10%"><center>ลำดับ</center></th>
                          <th scope="col" width="35%"><center>รูป</center></th>
                          <th scope="col" width="40%"><center>หมวดหมู่</center></th>
                          <th scope="col" width="40%"><center>สินค้า</center></th>
                          <th scope="col" width="15%"><center>แก้ไข</center></th>
                          <th scope="col" width="10%"><center>ลบ</center></th>
                        </tr>
                      </thead>
                      <?php 
                      $j = 0;
                      while ($proResult = mysqli_fetch_array($proQuery)) { 
                        $j++;
                        ?>
                      <tbody>
                        <tr>
                          
                            <th scope="row"><center><?php echo $j; ?></center></th>
                            <td><center><img class="cate-product" src="picture/<?php echo $proResult['picture_pro']; ?>"></center></td>
                              <td><center><?php 
                              $cateSQL    = "SELECT * FROM category_product WHERE mks_id = '".$idshop."' AND category_product_id = '".$proResult['category_product_id']."'";
                              $cateQuery  = mysqli_query($con,$cateSQL);
                              $cateResult = mysqli_fetch_array($cateQuery);
                              echo $cateResult['category_name']; 
                            ?></center></td>
                            <td><center><?php echo $proResult['name_pro']; ?></center></td>
                            
                            <td><center><a href="JavaScript:if(confirm('ยืนยันการแก้ไขสินค้า?') == true){window.location='edit_product.php?productid=<?php echo $proResult['product_id']; ?>';}">แก้ไข</a></center></td>
                            <td><center><a href="JavaScript:if(confirm('ยืนยันการลบสินค้า?') == true){window.location='delete_product.php?productid=<?php echo $proResult['product_id']; ?>';}">ลบ</a></center></td>

                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
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