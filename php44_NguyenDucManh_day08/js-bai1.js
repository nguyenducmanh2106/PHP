
function sum()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1")
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
						else {
							display.innerHTML="a+b="+(parseInt(a.value)+parseInt(b.value));
							warning.innerHTML="";
					}

		}
		function tru()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1")
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
						else
						{
							display.innerHTML="a-b="+(parseInt(a.value)-parseInt(b.value));
							warning.innerHTML="";
						}

		}
		function nhan()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1")
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
					
						else
						{
							display.innerHTML="a*b="+(parseInt(a.value)*parseInt(b.value));
							warning.innerHTML="";
						}

		}
		function chia_nguyen()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1")
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
					
						else
						{
							display.innerHTML="a/b="+(parseInt(a.value)/parseInt(b.value));
							warning.innerHTML="";
						}

		}
		function chia_du()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1")
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
					
						else
						{
							display.innerHTML="a%b="+(parseInt(a.value)%parseInt(b.value));
							warning.innerHTML="";
						}

		}
		function a_tang()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1")
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
					
			else
			{
				a.value++;
				var c=a.value;
						display.innerHTML="a++="+c;
						warning.innerHTML="";
			}
		}
		function tang_a()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1")
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
					
			else
			{
				var c=++a.value;
						display.innerHTML="++a="+c;
						warning.innerHTML="";
			}
		}
		function a_giam()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1");
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
			else{
				a.value--;
				var c=a.value;
						display.innerHTML="a--="+c;
						warning.innerHTML="";
			}
		}
		function giam_a()
		{
			var warning=document.getElementById("warning")
			var a=document.getElementById("no1");
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			if(a.value==""||b.value=="")
					{
						warning.innerHTML="Không được bỏ trống dữ liệu"
					}
					else if(isNaN(a.value)==true||isNaN(b.value)==true)
					{
						warning.innerHTML="cần nhập dữ liệu là số";
						display.innerHTML="";
					}
					
			else{
				var c=--a.value;
						display.innerHTML="--a="+c;
						warning.innerHTML="";
			}
		}
		function reset()
		{
			var a=document.getElementById("no1")
			var b=document.getElementById("no2")
			var display=document.getElementById("display");
			var warning=document.getElementById("warning");
			a.value="";
			b.value="";
			display.innerHTML="";
			warning.innerHTML="";
		}