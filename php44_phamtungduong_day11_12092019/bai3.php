<?php
function dk($a){
    echo 'Đường kính hình tròn = '.$a.'m';
    echo '<br/>';
}
function chuvi($a){
    echo 'Chu vi hình tròn = '.($a*pi()).'m';
    echo '<br/>';
}
function dientich($a){
    echo 'Diện tích hình tròn = '.(($a*$a)/4*pi()).'m';
    echo '<br/>';
}
$a=6;
dk($a);
chuvi($a);
dientich($a);
?>