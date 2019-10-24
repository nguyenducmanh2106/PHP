<?php
function sum($n){
    $sum=0;
    for($i=1;$i<=$n;$i++){
        $sum+=$i;
    }
    return $sum;
}
$n=500;
echo"Tổng các số từ 1 đến $n = ".sum($n);
?>