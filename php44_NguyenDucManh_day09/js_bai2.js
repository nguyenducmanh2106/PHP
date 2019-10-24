$(document).ready(function(){
	function getCurrentDateTime() {
    var currentdate = new Date();
    var datetime = currentdate.getDate() + "/"
        + (currentdate.getMonth()+1)  + "/"
        + currentdate.getFullYear() + " "
        + currentdate.getHours() + ":"
        + currentdate.getMinutes()+":"
        + currentdate.getSeconds();
    return datetime;
}
	$(".btn").click(function(event){
		event.preventDefault();
		$(".display").html($(".display").html()+"<div class='row' style='margin:12px 0;padding-bottom: 12px;border-bottom: 1px dotted #000'><div class='col-md-8 col-12' style='padding-left:0'>"
            +"<div class='img' style='width: 50px;height: 50px;border-radius: 50%;background: blue;text-align: center;line-height: 50px;margin:0 12px 0 0;float:left;'>U</div>"
 			+"<span style='display:block';>PHP 44</span><p 'style=margin-left: 75px;'>"+$(".form-control").val()+"</p></div><div 'class=col-md-4 col-12'><div style='float:right;'>"
 			+getCurrentDateTime()+
 			"</div></div></div>");
		$(".form-control").val("")
	})
})