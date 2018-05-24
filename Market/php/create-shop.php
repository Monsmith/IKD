<h4>ข้อมูลร้านค้า</h4>
<hr>
<script type="text/javascript">
  <?php include 'js/market.js'; ?>
</script>

	<div class="container">
		  <div class="col-12">
		  	<form name="creat_shop" method="post" action="php/create.php?UserID=<?php echo $_SESSION['UserID'];?>" enctype="multipart/form-data">
		  	   <div class="alert alert-secondary" role="alert">
		  		    <div class="form-group">
  				      <label>รูปร้านค้า</label>
  	           <input type="file" name="filUpload" class="form-control-file" required>
  	          </div>
              <div class="form-group">
                <label>ชื่อร้านค้า</label>
                <input type="text" name="txtnameshop" class="form-control" placeholder="ชื่อร้านค้า" required>
              </div>
              <div class="form-group">
                <label>หมวดหมู่ร้านค้า</label>
                  <div class="form-group">
                    <select name="txtcategory" class="form-control">
                      <option value="fhone">มือถือ แท็บเล็ต</option>
                      <option value="computer">คอมพิวเตอร์ แล็ปท็อป</option>
                      <option value="music">เครื่องดนตรี</option>
                      <option value="electrinic">เครื่องใช้ไฟฟ้า</option>
                      <option value="camera">กล้อง</option>
                      <option value="sport">กีฬา</option>
                      <option value="motorcycle">รถจักรยาน</option>
                      <option value="car">รถยนต์</option>
                      <option value="mom">แม่และเด็ก</option>
                      <option value="bag">กระเป๋า</option>
                      <option value="clothes">เสื้อผ้า</option>
                      <option value="watch">นาฬิกา</option>
                      <option value="shoes">รองเท้า</option>
                      <option value="health">สุขภาพและความงาม</option>
                      <option value="game">เกมส์</option>
                      <option value="pet">สัตว์เลี้ยง</option>
                      <option value="education">การศึกษา</option>
                      <option value="wholesale">ขายส่ง</option>
                      <option value="home">บ้านและสวน</option>
                      <option value="amulets">พระเครื่อง</option>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                <label>เบอร์โทรศัพท์</label>
                <input type="number" name="txttel" class="form-control" placeholder="เบอร์โทรศัพท์" required>
              </div>
              <div class="form-group">
                <label>อีเมลล์</label>
                <input type="email" name="txtemail" class="form-control" placeholder="อีเมลล์" required>
              </div>
              <div class="form-group">
                <label>รายละเอียดร้านค้า</label>
                <textarea class="form-control" name="txtdescription" id="exampleFormControlTextarea1" rows="3" required></textarea>
              </div>
              <div class="form-group">
                <label>ที่อยู่</label>
                <input type="text" name="txtaddress" class="form-control" placeholder="ที่อยู่" required>
              </div>
              <div class="form-group">
                <label>ถนน</label>
                <input type="text" name="txtroad" class="form-control" placeholder="ถนน" required>
              </div>
              <div class="form-group">
                <label>แขวง/ตำบล</label>
                <input type="text" name="txtdistrict" class="form-control" placeholder="แขวง/ตำบล" required>
              </div>
              <div class="form-group">
                <label>เขต/อำเภอ</label>
                <input type="text" name="txtarea" class="form-control" placeholder="เขต/อำเภอ" required>
              </div>
              <div class="form-group">
                <label>จังหวัด</label>
                <input type="text" name="txtprovince" class="form-control" placeholder="จังหวัด" required>
              </div>
              <div class="form-group">
                <label>รหัสไปษณีย์</label>
                <input type="number" name="txtpost" class="form-control" placeholder="รหัสไปษณีย์" required>
              </div>
			     </div>
		        <center><button type="submit" name="Submit" class="btn btn-primary bnt-color">สร้างร้านค้า</button></center>
	     </form>
      </div>
  </div>