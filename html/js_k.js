function hienthi(){
              var name=document.getElementById("exampleInputName").value;
              var email=document.getElementById("exampleInputEmail").value;
              var phone=document.getElementById("exampleInputPhone").value;
              var textarea=document.getElementById("exampleFormControlTextarea1").value;
              var display=document.getElementById("display");
             display.innerHTML='Name: '+name+'<br/>'+'Email: '+email+'<br/>'+'Phone: '+phone+'<br/>'
             +'Message: '+textarea;
              return false;
 }