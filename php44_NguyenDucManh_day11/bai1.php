<?php
function chuvi($a,$b){
	return ($a+$b)*2;
}
function dientich($a,$b){
	return $a*$b;
}
$a=10;
$b=5;
$chuvi=chuvi($a,$b);
$dientich=dientich($a,$b);
echo"Chiều dài hình chữ nhật = $a m";
echo"<br/>";
echo"Chiều rộng hình chữ nhật = $a m";
echo"<br/>";
echo"Chu vi hình chữ nhật = $chuvi m";
echo"<br/>";
echo"Diện tích hình chữ nhật = $dientich m<sup>2</sup>";
echo"<br/>";
?>