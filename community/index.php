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

    <!-- Plugin CSS -->
    <link ... rel="stylesheet" type="text/css" href="../css/community.css?v=1003">
    <link ... rel="stylesheet" type="text/css" href="css/index-community.css?v=1010">
    <!-- Custom styles for this template -->
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>

  <body class="community">
    
   <header  class="community">
        <div class="row">
        	<div class="col-4">
        		<div class="header" >
			      <div class="card" id="bg-header">
			      	<?php include '../php/connectdb.php';
			      		include '../php/select_userid.php';
			      		include 'php/gender.php';
			      	 ?>
				    <img  src="../myfile/<?php echo $objResult["user_picture"]; ?>" class="picture-profile" >
				    <div class="card-body">
				      <h5 class="card-title text-center"><?php echo $objResult["user_fname"]; ?>&nbsp&nbsp&nbsp<?php echo $objResult["user_lname"]; ?></h5>
				      <p class="card-text"><img src="icon/icon-gender.png" class="icon-profile" alt="Responsive image">&nbsp:&nbsp<?php echo $gender; ?></p>
				      <p class="card-text"><img src="icon/icon-birthday.png" class="icon-profile" alt="Responsive image">&nbsp:&nbsp<?php echo $objResult["user_bday"]; ?></p>
				      <p class="card-text"><img src="icon/icon-tel.png" class="icon-profile" alt="Responsive image">&nbsp:&nbsp<?php echo $objResult["user_tel"]; ?></p>
				      <p class="card-text"><img src="icon/icon-mail.png" class="icon-profile" alt="Responsive image">&nbsp:&nbsp<?php echo $objResult["user_email"]; ?></p>
				      <p class="card-text"><img src="icon/icon-time.png" class="icon-profile" alt="Responsive image">&nbsp:&nbsp<?php echo $objResult["user_taccount"]; ?>&nbsp&nbsp<?php echo $objResult["user_daccount"]; ?></p>
				      <p class="card-text"><center><button type="button" class="btn community-color" onclick="window.location='profile-setting.php'">แก้ไขโปรไฟล์</button></center></p>
				    </div>
				  </div>
				</div>
		  	</div>
		   	<div class="col-8" id="bg-header">
		      <div class="alert alert-light" role="alert">
		      	<div class="row">
				    <div class="col-sm">
				      <a href="../ishop"><img src="picture/icon-shop.jpg" class="img-fluid" alt="Responsive image" id="iconshopping"></a>
				    </div>
				    <div class="col-sm">
				      <a href="../Market"><img src="picture/icon-market.jpg" class="img-fluid" alt="Responsive image" id="iconshopping"></a>
				    </div>
				    <div class="col-sm">
				      <a href="../Mall"><img src="picture/icon-mall.jpg" class="img-fluid" alt="Responsive image" id="iconshopping"></a>
				    </div>
				  </div><br>
				  <div class="row">
				    <div class="col-sm">
				      <a href="../iAvenue"><img src="picture/icon-avenue.jpg" class="img-fluid" alt="Responsive image" id="iconshopping"></a>
				    </div>
				    <div class="col-sm">
				      <a href="../Food"><img src="picture/icon-food.jpg" class="img-fluid" alt="Responsive image" id="iconshopping"></a>
				    </div>
				    <div class="col-sm">
				      <a href="../iTravel"><img src="picture/icon-travel.jpg" class="img-fluid" alt="Responsive image" id="iconshopping"></a>
				    </div>
				  </div>
		      </div>
		   	</div>
        </div>
    </header>
    
    
    <nav class="navbar navbar-expand-lg nav-bg sticky-top">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-white" href="../community"><h4><strong>iKingdom</strong></h4></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
	    </form>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <img src="../icon/icon-cart.png" class="img-fluid navbar-icon" alt="Responsive image">
            </li>&nbsp&nbsp&nbsp&nbsp
            <li class="nav-item">
              <img src="../icon/icon-megaphone.png" class="img-fluid navbar-icon" alt="Responsive image" ><span class="badge badge-danger">4</span>
            </li>&nbsp&nbsp
            <li class="nav-item">
              <button type="button" class="btn btn-outline-light" onclick="window.location='service.php'">บริการ iKingdom</button>
            </li>&nbsp&nbsp
            <li class="nav-item"> 
            	<div class="btn-group">
				  <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <img src="../myfile/<?php echo $objResult["user_picture"]; ?>" width="30px" height="auto">&nbsp<a><?php echo $objResult["user_fname"]; ?>&nbsp&nbsp<?php echo $objResult["user_lname"]; ?></a>
				  </button>
				  <div class="dropdown-menu dropdown-menu-right">
				    <?php include 'php/menu_myshop.php'; ?>
				    <button class="dropdown-item btn nav-left-bar" type="button" onclick="window.location='profile-setting.php'">แก้ไขข้อมูลส่วนตัว</button>
				    <button class="dropdown-item btn nav-left-bar" type="button" onclick="window.location='../php/logout.php'">ออกจากระบบ</button>
				  </div>
				</div>
            </li>
          </ul>
        </div>
      </div>   
    </nav>

    <div class="community">
	    <div class="container"><br>
		  <div class="row">
		    <div class="col-3">
			    <div class="alert alert-light menubar-left" role="alert">
					<img src="../myfile/<?php echo $objResult["user_picture"]; ?>" width="30px" height="auto">&nbsp<a><?php echo $objResult["user_fname"]; ?>&nbsp&nbsp<?php echo $objResult["user_lname"]; ?></a><hr>
					<b>ร้านค้า</b><br>
					<?php include 'php/menu_myshop.php'; ?><br><br><hr>
					<b>iKingdom</b><br>
					<button type="button" class="btn nav-left-bar" onclick="window.location='../ishop'"><img src="picture/icon-shop.jpg" class="img-fluid icon-left-bar" alt="Responsive image"><a class="nav-left-bar">&nbsp&nbspiShop</a></button>
					<button type="button" class="btn nav-left-bar" onclick="window.location='../Market'"><img src="picture/icon-market.jpg" class="img-fluid icon-left-bar" alt="Responsive image"><a class="nav-left-bar">&nbsp&nbspMarket</a></button>
					<button type="button" class="btn nav-left-bar" onclick="window.location='../Mall'"><img src="picture/icon-mall.jpg" class="img-fluid icon-left-bar" alt="Responsive image"><a class="nav-left-bar">&nbsp&nbspMall</a></button>
					<button type="button" class="btn nav-left-bar" onclick="window.location='../iAvenue'"><img src="picture/icon-avenue.jpg" class="img-fluid icon-left-bar" alt="Responsive image"><a class="nav-left-bar">&nbsp&nbspiAvenue</a></button>
					<button type="button" class="btn nav-left-bar" onclick="window.location='../Food'"><img src="picture/icon-food.jpg" class="img-fluid icon-left-bar" alt="Responsive image"><a class="nav-left-bar">&nbsp&nbspFood</a></button>
					<button type="button" class="btn nav-left-bar" onclick="window.location='../iTravel'"><img src="picture/icon-travel.jpg" class="img-fluid icon-left-bar" alt="Responsive image"><a class="nav-left-bar">&nbsp&nbspiTravel</a></button>	
					<hr>
					<b>ร้านค้าโปรด</b><br>
				</div>
			</div>

		    <div class="col-9">
			    <div class="card">
				  <div class="card-header">
				   	<center>บี เอ เอ็น เค</cetern>
				  </div>
				  <div class="card-body">
				    <div class="row">
					    <div class="col">
					      <img src="picture/1.jpg" class="rounded mx-auto d-block post">
					    </div>
					    <div class="col">
					    <p>Adidas ace 15.1 black + อุปกรณ์ครบ (กล่อง+ถุงผ้า+ป้าย)ก็พอมีกับเค้าบ้างสีหายา</p>
						<p>#size255 #สีหายาก</p>
						<br><br><button type="button" class="btn community">ร้านค้า</button>
					    </div>
					  </div>
				  </div>
				  <div class="card-footer">
				    <button class="btn unlike"><img class = "unlike" src="icon/icon-unlike.png">&nbspLIKE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				    <button class="btn unlike"><img class = "unlike" src="icon/icon-comment.png">&nbspCOMMENT</button><hr>
				    <div class="row">
					    	<div class="col-9">
					    		<input class="form-control" type="text" placeholder="COMMENT">
					    	</div>
					    	<div class="col-3">
					    		<button type="button" class="btn community">COMMENT</button>
					    	</div>
				    </div> 
				  </div>
				</div><br>
				<div class="card">
				  <div class="card-header">
				   	<center>plaza.co.th</cetern>
				  </div>
				  <div class="card-body">
				    <div class="row">
					    <div class="col">
					      <img src="picture/2.png" class="rounded mx-auto d-block post">
					    </div>
					    <div class="col">
					    <p>🌸🌸 ข่าวดีค่าาา 🌸🌸</p>

						<p>✌🏻✌🏻 มีสินค้าเข้ามาแล้วนะคะ สำหรับ SEIKO New Mini Monster 2018 สีดำแดง ที่หลายๆท่านตามหากัน ❤️❤️</p>
						<p>🔥🔥 ราคาเดิมเลยค่ะ ลดเหลือ 6,930 บาท พร้อมผ่อน 0% 4 เดือน 🔥🔥</p>

						<p>เพิ่มเติม 🔻🔻</p>
						<p>http://www.plaza.co.th/index.php…</p>

 						<p>🔷🔷 สอบถามเพิ่มเติมโทร 02-314-6461</p>
						<p>Line: @plazathailand (มี @ นำหน้าชื่อด้วยนะคะ)</p>
						<p>หรือสอบถาม --> http://line.me/ti/p/%40plazathailand</p>
						<br><button type="button" class="btn btn-success">ร้านค้า</button>
					    </div>
					  </div>
				  </div>
				  <div class="card-footer">
				    <button class="btn unlike"><img class = "unlike" src="icon/icon-unlike.png">&nbspLIKE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				    <button class="btn unlike"><img class = "unlike" src="icon/icon-comment.png">&nbspCOMMENT</button><hr>
				    <div class="row">
					    	<div class="col-9">
					    		<input class="form-control" type="text" placeholder="COMMENT">
					    	</div>
					    	<div class="col-3">
					    		<button type="button" class="btn community">COMMENT</button>
					    	</div>
				    </div> 
				  </div>
				</div><br>
				<div class="card">
				  <div class="card-header">
				   	<center>Valley Girl</center>
				  </div>
				  <div class="card-body">
				    <div class="row">
					    <div class="col">
					      <img src="picture/3.png" class="rounded mx-auto d-block post">
					    </div>
					    <div class="col">
					    <p>พร้อมส่ง</p>
						<p>HCT SET</p>
						<p>เสื้อ + กางเกง</p>
						<p>เซตนี้คือเป้ะมว้ากกกกกก เสื้อทรงสูทแขนกุด ด้านข้างอัดพลีทบานนิดๆ ทรงน่าร้ากมากกกก มาคุ่กับกางเกงเอวสุง ด้านข้างอัดพลีทบานนิดๆ ใส่คุ่กันคือเป้ะมว้าก PERFECTสุดๆ ผ้าของเรา ผ้าเดียวกับในชอปเรยนะคะ ห้ามพลาดค่า</p>
						<p>S : อก 32 เอว25 สะโพก 35</p>
						<p>M: อก เอว27 สะโพก37</p>
						<p>L : อก36 เอว 29 สะโพก39</p>
						<p>ราคา 790</p>
						<br><button type="button" class="btn btn-success">ร้านค้า</button>
					    </div>
					  </div>
				  </div>
				  <div class="card-footer">
				    <button class="btn unlike"><img class = "unlike" src="icon/icon-unlike.png">&nbspLIKE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				    <button class="btn unlike"><img class = "unlike" src="icon/icon-comment.png">&nbspCOMMENT</button><hr>
				    <div class="row">
					    	<div class="col-9">
					    		<input class="form-control" type="text" placeholder="COMMENT">
					    	</div>
					    	<div class="col-3">
					    		<button type="button" class="btn community">COMMENT</button>
					    	</div>
				    </div> 
				  </div>
				</div><br>
		    </div> 
		  </div>
	</div>

    <footer class="page-footer">
      <span class="d-block p-2" id="color-theme">
        d-block
      </span>
      <span class="d-block p-2 bg-white text-black">
        d-block
      </span>
    </footer>

    

  </body>

</html>
