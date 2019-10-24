<?php
function canh($a){
    echo 'Cạnh hình vuông = '.$a.'m';
    echo '<br/>';
}
function chuvi($a){
    echo 'Chu vi hình vuông = '.($a*4).'m';
    echo '<br/>';
}
function dientich($a){
    echo 'Diện tích hình vuông = '.($a*$a).'m<sup>2</sup>';
}
$a=12;
canh($a);
chuvi($a);
dientich($a);
?>