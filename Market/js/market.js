function hsprice() {
    var x = document.getElementById("price").value;
    document.getElementById("showprice").innerHTML = x;
}
function button_addpro(){
    var coll = document.getElementsByClassName("collapsible");
                        var i;
                        for (i = 0; i < coll.length; i++) {
                          coll[i].addEventListener("click", function() {
                              this.classList.toggle("active1");
                              var content = this.nextElementSibling;
                              if (content.style.maxHeight){
                                  content.style.maxHeight = null;
                              } else {
                                  content.style.maxHeight = content.scrollHeight + "px";
                              } 
                          });
                       }
}
function cressub(){
    
    if (document.creat_shop.txtnameshop.value == "") {
        alert("กรุณาใส่ชื่อร้านค้าของคุณ");
        document.creat_shop.txtnameshop.focus();
        return false;
    }else if (document.creat_shop.txttel.value == "") {
        alert("กรุณาใส่เบอร์ติดต่อร้านค้าของคุณ");
        document.creat_shop.txttel.focus();
        return false;
    }else if(document.creat_shop.txtemail.value == ""){
        alert("กรุณาใส่อีเมลล์ติดต่อร้านค้าของคุณ");
        document.creat_shop.txtemail.focus();
        return false;
    }else if(document.creat_shop.txtprovince.value == ""){
        alert("กรุณาใส่จังหวัดที่อยู่ร้านค้าของคุณ");
        document.creat_shop.txtprovince.focus();
        return false;
    }else{
        document.creat_shop.Submit.disabled = true;
        return true;

    }
    document.creat_shop.submit();
} 

