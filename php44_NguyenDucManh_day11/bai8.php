<?php
function display($n){
    $star='';
    for($i=0;$i<$n;$i++){
        $star=$star.'*';
        echo"$star<br/>";
    }
    for($i=0;$i<$n;$i++){
        $star=substr($star, 0, -1);
        echo "$star<br/>";
    }
}
$n=9;
display($n);
?>