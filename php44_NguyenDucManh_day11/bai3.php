<?php
function chuvi($a){
    return 2*pi()*$a;
}
function dientich($a){
    return pi()*$a*$a;
}
$a=6;
$chuvi=chuvi($a);
$dientich=dientich($a);
echo"Đường kính hình tròn = $a m";
echo"<br/>";
echo"Chu vi hình tròn = $chuvi m";
echo"<br/>";
echo"Diện tích hình tròn = $dientich m<sup>2</sup>";
echo"<br/>";
?>