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
function formatMoney(inum){  // ฟังก์ชันสำหรับแปลงค่าตัวเลขให้อยู่ในรูปแบบ เงิน
    var s_inum=new String(inum);
    var num2=s_inum.split(".");
    var n_inum="";  
    if(num2[0]!=undefined){
        var l_inum=num2[0].length;  
        for(i=0;i<l_inum;i++){  
            if(parseInt(l_inum-i)%3==0){  
                if(i==0){  
                    n_inum+=s_inum.charAt(i);         
                }else{  
                    n_inum+=","+s_inum.charAt(i);         
                }     
            }else{  
                n_inum+=s_inum.charAt(i);  
            }  
        }  
    }else{
        n_inum=inum;
    }
    if(num2[1]!=undefined){
        n_inum+="."+num2[1];
    }
    return n_inum;
}

function discount(){
  $('input[name=discount]:radio').on('change', function() {
    $('#target').val( $(this).val() );
});
}