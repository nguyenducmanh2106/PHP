<?php
function dai($a){
    echo 'Chiều dài hình chữ nhật = '.$a.' m';
    echo '<br/>';
}
function rong($b){
    echo 'Chiều rộng hình chữ nhật = '.$b.' m';
    echo '<br/>';
}
function chuvi($a,$b){
    echo 'Chu vi hình chữ nhật = '.($a+$b)*2 .' m';
    echo '<br/>';
}
function dientich($a,$b){
    echo 'Diện tích hình chữ nhật = '.($a*$b).' m<sup>2</sup>';
}
$a=10;
$b=5;
dai($a);
rong($b);
chuvi($a,$b);
dientich($a,$b);
?>