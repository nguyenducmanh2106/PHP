<?php
function display($n){
    $save='';
    for($i=1;$i<=$n;$i++){
        $save=$save.'*';
       echo"$save<br/>";
    }
}
$n=5;
display($n);
?>