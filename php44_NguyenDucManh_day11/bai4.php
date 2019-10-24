<?php
function display($n){
    for($i=1;$i<=$n;$i++){
        if($i==$n){
            echo"$i";
            break;
        }
        echo"$i - ";
    }
}
$n=50;
display($n);
?>