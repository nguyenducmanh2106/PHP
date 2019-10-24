$(document).ready(function(event){
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		$(".reserve").click(function(event){
			var email=$("#exampleInputEmail1");
			var name=$("#exampleInputName").val();
			var note=$("#exampleFormControlTextarea1").val();
			var telephone=$("#exampleInputTelephone").val();
			var guest=$("#exampleInputNumber").val();
		    if(email.val()==""||name==""||note==""||telephone==""||guest==""){
				alert("Cần nhập đủ các trường")
			}
			else{
				 if (!filter.test(email.val())){
				 	alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
            email.focus();
             return false; 
				 }
				else alert("Your email address:"+email.val()+"\n"+"Name:"+name+"\n"+"Notes:"+note+"\n"+"Telephone number:"+telephone+"\n"+"No. of guests:"+guest+"\n")
			}
		 event.preventDefault();
	})
})