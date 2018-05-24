<?php include '../php/check_user.php'; ?>
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

    <script src="../jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    
    <link href="../css/index.css?v=1010" rel="stylesheet">
    <link ... rel="stylesheet" type="text/css" href="../css/community.css?v=1010">
    <link ... rel="stylesheet" type="text/css" href="css/index-market.css?v=1010">
    
    
 
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

  </head>

  <body>
      <?php include '../php/connectdb.php';
			      include '../php/select_userid.php';
	     ?>
       
       
        <nav class="navbar navbar-expand-lg nav-bg-market sticky-top">
          <div class="nav-menu-left">
             <a class="navbar-brand js-scroll-trigger text-white" href="../Market"><h4><strong>iKingdom Market</strong></h4></a>
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
                          <img src="../icon/icon-cart.png" class="img-fluid navbar-icon" alt="Responsive image">
                        </li>&nbsp&nbsp&nbsp&nbsp
                        <li class="nav-item">
                          <img src="../icon/icon-megaphone.png" class="img-fluid navbar-icon" alt="Responsive image" ><span class="badge badge-danger">4</span>
                        </li>&nbsp&nbsp
                        <li class="nav-item">
                          <button type="button" class="btn btn-outline-light" onclick="window.location='../community/service'">บริการ iKingdom</button>
                        </li>&nbsp&nbsp
                        <li class="nav-item"> 
                      <div class="btn-group">
                      <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../myfile/<?php echo $objResult["user_picture"]; ?>" width="30px" height="auto">&nbsp<a><?php echo $objResult["user_fname"]; ?>&nbsp&nbsp<?php echo $objResult["user_lname"]; ?></a>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <?php include 'php/menu_myshop.php'; ?>
                        <button class="dropdown-item" type="button" onclick="window.location='../community/setting.php'">แก้ไขข้อมูลส่วนตัว</button>
                        <button class="dropdown-item" type="button" onclick="window.location='../php/logout.php'">ออกจากระบบ</button>
                      </div>
                    </div>
                    </li>
                  </ul>
                </div>
              </div>
              </nav>
  

    <div class="row">
        <div class="col-1">
            
        </div>
        <div class="col-2 ">
            <div class="nav nav-bg-color flex-column"> 
              <br>
               <a class="nav-link menu-font active" id="nav-pills" data-toggle="tab" href="#v-pills-home"><img src="icon/icon-menu-home.png" class="icon-menu">&nbsp&nbsp&nbspหน้าหลัก</a>
               <a class="nav-link menu-font" id="nav-pills" href="../community"><img src="icon/icon-community.png" class="icon-menu">&nbsp&nbsp&nbspชุมชน</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-myshop"><img src="icon/icon-menu-shop.png" class="icon-menu">&nbsp&nbsp&nbspร้านค้าของฉัน</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-create"><img src="icon/icon-menu-create.png" class="icon-menu">&nbsp&nbsp&nbspสร้างร้านค้า</a>
               <a><hr></a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-shop-all"><img src="icon/icon-shop-all.png" class="icon-menu">&nbsp&nbsp&nbspร้านค้าทั้งหมด</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-recommend"><img src="icon/icon-menu-recommend.png" class="icon-menu">&nbsp&nbsp&nbspร้านค้าแนะนำ</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-newshop"><img src="icon/icon-menu-new.png" class="icon-menu">&nbsp&nbsp&nbspร้านค้าใหม่</a>
               <a><hr></a>

               <b class="nav-link menu-font"><img src="icon/icon-menu-category.png" class="icon-menu">&nbsp&nbsp&nbspหมวดหมู่ร้านค้า</b>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-mobile"><img src="icon/category-shop/icon-mobile.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspมือถือ แท็บเล็ต</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-computer"><img src="icon/category-shop/icon-computer.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspคอมพิวเตอร์ แล็ปท็อป</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-machines"><img src="icon/category-shop/icon-machines.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspเครื่องใช้ไฟฟ้า</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-camera"><img src="icon/category-shop/icon-camera.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspกล้อง</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-music"><img src="icon/category-shop/icon-music.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspเครื่องดนตรี</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-sport"><img src="icon/category-shop/icon-sport.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspกีฬา</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-bike"><img src="icon/category-shop/icon-bike.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspรถจักรยาน</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-motorcycle"><img src="icon/category-shop/icon-motorcycle.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspรถมอเตอร์ไซต์</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-car"><img src="icon/category-shop/icon-car.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspรถยนต์</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-mother"><img src="icon/category-shop/icon-mother.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspแม่และเด็ก</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-bag"><img src="icon/category-shop/icon-bag.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspกระเป๋า</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-clothes"><img src="icon/category-shop/icon-clothes.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspเสื้อผ้า</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-watch"><img src="icon/category-shop/icon-watch.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspนาฬิกา</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-shoes"><img src="icon/category-shop/icon-shoes.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspรองเท้า</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-health"><img src="icon/category-shop/icon-health.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspสุขภาพและความงาม</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-ornament"><img src="icon/category-shop/icon-ornament.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspเครื่องประดับ</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-game"><img src="icon/category-shop/icon-game.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspเกมส์</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-pets"><img src="icon/category-shop/icon-pets.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspสัตว์เลี้ยง</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-education"><img src="icon/category-shop/icon-education.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspการศึกษา</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-wholesale"><img src="icon/category-shop/icon-wholesale.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspขายส่ง</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-homegar"><img src="icon/category-shop/icon-home.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspบ้านและสวน</a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-amulets"><img src="icon/category-shop/icon-amulets.jpg" class="icon-menu-cate">&nbsp&nbsp&nbspพระเครื่อง</a>

               <a><hr></a>
               <a class="nav-link menu-font" id="nav-pills" data-toggle="tab" href="#v-pills-like"><img src="icon/icon-menu-like.png" class="icon-menu">&nbsp&nbsp&nbspร้านค้าที่ติดตาม</a>
            </div>
            <br>
        </div>
        <div class="col-8">
          <?php include 'php/home.php'; ?>
        </div>
          <div class="tab-pane fade" id="v-pills-myshop" role="tabpanel" aria-labelledby="v-pills-recommend-tab">
              <?php include 'php/myshop.php'; ?>
          </div>
          <div class="tab-pane fade" id="v-pills-create" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <?php include 'php/create-shop.php'; ?>
          </div>
          <div class="tab-pane fade" id="v-pills-shop-all" role="tabpanel" aria-labelledby="v-pills-shop-all">
              <?php include 'php/shop-all.php'; ?>
          </div>
          <div class="tab-pane fade" id="v-pills-recommend" role="tabpanel" aria-labelledby="v-pills-recommend-tab">
              recomment
          </div>
          <div class="tab-pane fade" id="v-pills-newshop" role="tabpanel" aria-labelledby="v-pills-newshop-tab">
              newshop
          </div>


          <div class="tab-pane fade" id="v-pills-mobile" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              mobile
          </div>
          <div class="tab-pane fade" id="v-pills-computer" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              computer
          </div>
          <div class="tab-pane fade" id="v-pills-machines" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              Electronic
          </div>
          <div class="tab-pane fade" id="v-pills-camera" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              camera
          </div>
          <div class="tab-pane fade" id="v-pills-music" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              music
          </div>
          <div class="tab-pane fade" id="v-pills-sport" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              sport
          </div>
          <div class="tab-pane fade" id="v-pills-bike" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              bike
          </div>
          <div class="tab-pane fade" id="v-pills-motorcycle" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              motorcycle
          </div>
          <div class="tab-pane fade" id="v-pills-car" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              car
          </div>
          <div class="tab-pane fade" id="v-pills-mother" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              mother
          </div>
          <div class="tab-pane fade" id="v-pills-bag" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              bag
          </div>
          <div class="tab-pane fade" id="v-pills-watch" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              watch
          </div>
          <div class="tab-pane fade" id="v-pills-shoes" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              shoes
          </div>
          <div class="tab-pane fade" id="v-pills-health" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              health
          </div>
          <div class="tab-pane fade" id="v-pills-ornament" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              ornament
          </div>
          <div class="tab-pane fade" id="v-pills-game" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              game
          </div>
          <div class="tab-pane fade" id="v-pills-pets" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              pets
          </div>
          <div class="tab-pane fade" id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              education
          </div>
          <div class="tab-pane fade" id="v-pills-wholesale" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              wholesale
          </div>
          <div class="tab-pane fade" id="v-pills-homegar" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              homegardent
          </div>
          <div class="tab-pane fade" id="v-pills-amulets" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              amulets
          </div>


          <div class="tab-pane fade" id="v-pills-like" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              like
          </div>
        </div>

          
        </div>
        <div class="col-1">
            
        </div>
    </div>

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