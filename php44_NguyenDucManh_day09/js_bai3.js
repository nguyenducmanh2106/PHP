$(document).ready(function(){
	$("a.menu1").click(function(event){
		event.preventDefault();
		if($("ul ul").css("display")=="none")
		{
			$("ul ul").css("display","block")
		}
		else{
			$("ul ul").css("display","none")
		}
	})
})