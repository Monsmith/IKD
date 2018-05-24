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
    <link ... rel="stylesheet" type="text/css" href="css/index-shop.css?v=1011">
    <script type="text/javascript" src="js/shopjs.js?v=1006"></script>
    

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

              <div class="container">
                <font size="5">เพิ่มสินค้า</font><button type="button" class="btn btn-outline-danger back" onclick="window.location='product_manage.php'">ย้อนกลับ</button><br>
                <hr>
                <form name="add-product" action="php/product.php" method="post" enctype="multipart/form-data">
                <p class="collapsible"><b>&nbspข้อมูลสินค้าทั่วไป</b></p>
                  <div class="content">
                    <div class="form-group"><br>
                      <label><h5><font color="red">*</font>หมวดหมู่สินค้า :</h5></label>
                      <select class="form-control" name="cate_pro">
                        <?php include 'php/select_category_pro.php'; ?>
                        <?php while ($catproResult = mysqli_fetch_array($catproQuery)) { ?>
                            <option value="<?php echo $catproResult['category_product_id']; ?>"><?php echo $catproResult['category_name']; ?></option>
                      <?php } ?>
                      </select>
                    </div>
                    <div class="form-group"><br>
                      <label><h5><font color="red">*</font>กำหนดหมวดหมู่สินค้า :</h5></label>
                      <select class="form-control" name="cate">
                            <option value="all">สินค้าปกติ</option>
                            <option value="new">สินค้าใหม่</option>
                            <option value="com">สินค้าแนะนำ</option>
                      </select>
                    </div>
                    <div class="form-group"><br>
                      <label><h5><font color="red">*</font>ชื่อสินค้า :</h5></label>
                      <input type="text" name="name_pro" class="form-control" placeholder="ชื่อสินค้า" required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-4">
                            <label><h5>สี :</h5></label>
                            <input type="text" name="color_pro" class="form-control" placeholder="สีของสินค้า">
                          </div>
                          <div class="col-4">
                            <label><h5>ขนาด :</h5></label>
                            <input type="text" name="size_pro" class="form-control" placeholder="ขนาดของสินค้า">
                          </div>
                          <div class="col-4">
                            <label><h5>น้ำหนัก :</h5></label>
                            <input type="text" name="weight_pro" class="form-control" placeholder="น้ำหนักของสินค้า">
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-4">
                            <label><h5>ยี่ห้อ :</h5></label>
                            <input type="text" name="brand_pro" class="form-control" placeholder="ยี่ห้อของสินค้า">
                          </div>
                          <div class="col-4">
                            <label><h5>รุ่น :</h5></label>
                            <input type="text" name="gen_pro" class="form-control" placeholder="รุ่นของสินค้า">
                          </div>
                          <div class="col-4">
                            <label><h5>สภาพ :</h5></label>
                            <input type="text" name="condition_pro" class="form-control" placeholder="สภาพสินค้า">
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label><h5><font color="red">*</font>รูปสินค้า :</h5></label>
                      <div class="custom-file">
                        <input type="file" name="filUpload" class="custom-file-input" required>
                        <label class="custom-file-label">เลือกรูป</label>
                      </div>
                    </div>
                  </div>
                <p class="collapsible"><b>&nbspรายละเอียดสินค้า</b></p>
                  <div class="content">
                    <div class="form-group">
                      <label ><h5><font color="red">*</font>รายละเอียดสินค้าแบบย่อ :</h5></label>
                      <textarea class="form-control" name="des1_pro" rows="2" maxlength="150" required></textarea>
                    </div>
                    <div class="form-group">
                      <label ><h5><font color="red">*</font>รายละเอียดสินค้าแบบขยาย :</h5></label>
                      <textarea class="form-control" name="des2_pro" rows="5" maxlength="2000" required></textarea>
                    </div>
                  </div>
                <p class="collapsible"><b>&nbspราคาสินค้า</b></p>
                  <div class="content">
                   
                    <div class="row">
                      <div class="col-4">
                        <label><h5><font color="red">*</font>ราคาสินค้า (บาท):</h5></label>
                        <input type="number" name="price_pro" id="price" class="form-control" placeholder="ราคาสินค้า" required>
                      </div>
                      <div class="col-8">
                        <div class="row">
                          
                          <div class="col-4">
                            <input type="radio" name="discount_pro" value="nddis" checked>
                            <label><h5>ไม่มีส่วนลด :</h5></label>
                          </div>
                          <div class="col-4">
                            <input type="radio" name="discount_pro" value="percen">
                            <label><h5>ส่วนลด (%):</h5></label>
                          </div>  
                          <div class="col-4">
                            <input type="radio" name="discount_pro" value="price">
                            <label><h5>ส่วนลด (บาท):</h5></label>
                          </div> 
                        </div>
                        <input type="number" name="discount" class="form-control" id="target" placeholder="ส่วนลด">
                  
                      </div>
                      <div class="col-4">
                        
                      </div>
                    </div><br>
                    
                   

                  </div>
                <p class="collapsible"><b>&nbspข้อมูลคลังสินค้า</b></p>
                  <div class="content">
                    <div class="row">
                      <div class="col-6">
                        <label><h5><font color="red">*</font>จำนวน :</h5></label>
                        <input type="number" name="number_pro" class="form-control" placeholder="จำนวนสินค้า" required>
                      </div>
                      <div class="col-6">
                        <label><h5><font color="red">*</font>หน่วย :</h5></label>
                        <input type="text" name="unit_pro" class="form-control" placeholder="หน่วยของสินค้า" required>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-3">
                        <div class="alert alert-primary" role="alert">
                            <center>คงเหลือ</center> 
                            <center>0</center> 
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="alert alert-danger" role="alert">
                            <center>จอง</center> 
                            <center>0</center> 
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="alert alert-warning" role="alert">
                            <center>รอส่ง</center> 
                            <center>0</center> 
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="alert alert-success" role="alert">
                            <center>ขายแล้ว</center> 
                            <center>0</center> 
                        </div>
                      </div>
                    </div>
                  </div><br>
                  <center><input type="submit" name="submit" value="บันทึก" class="btn button-market"></center>
                </form>

                

                 <script>
                    button_addpro();
                </script>
                
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