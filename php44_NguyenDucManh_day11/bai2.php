<?php
function chuvi($a){
    return $a*4;
}
function dientich($a){
    return $a*$a;
}
$a=12;
$chuvi=chuvi($a);
$dientich=dientich($a);
echo"Cạnh hình vuông = $a m";
echo"<br/>";
echo"Chu vi hình vuông = $chuvi m";
echo"<br/>";
echo"Diện tích hình vuông = $dientich m<sup>2</sup>";
echo"<br/>";
?>