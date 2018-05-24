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
    <link href="../css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/community.css">

    <!-- Custom styles for this template -->
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>

  <body>
    <?php include '../php/connectdb.php';
			      		include '../php/select_userid.php';
	?>

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
              <img src="../picture/icon-cart.png" class="img-fluid navbar-icon" alt="Responsive image">
            </li>&nbsp&nbsp&nbsp&nbsp
            <li class="nav-item">
              <img src="../picture/icon-megaphone.png" class="img-fluid navbar-icon" alt="Responsive image" id="iconnavbar"><span class="badge badge-danger">4</span>
            </li>&nbsp&nbsp
            <li class="nav-item">
              <button type="button" class="btn btn-outline-light">บริการ iKingdom</button>
            </li>&nbsp&nbsp
            <li class="nav-item"> 
            	<div class="btn-group">
				  <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <img src="../myfile/<?php echo $objResult["user_picture"]; ?>" width="30px" height="auto">&nbsp<a><?php echo $objResult["user_fname"]; ?>&nbsp&nbsp<?php echo $objResult["user_lname"]; ?></a>
				  </button>
				  <div class="dropdown-menu dropdown-menu-right">
				    <button class="dropdown-item" type="button">ร้านค้า</button>
				    <button class="dropdown-item" type="button">แก้ไขข้อมูลส่วนตัว</button>
				    <a href="../php/logout.php"><button class="dropdown-item" type="button">ออกจากระบบ</button></a>
				  </div>
				</div>
            </li>
          </ul>
        </div>
      </div>   
    </nav><br>

   

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