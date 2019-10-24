<?php
function sum($a){
    $sum=0;
    for ($i=1;$i<=$a;$i++){
        $sum +=$i;
    }
    echo 'Tổng các số từ 1 đến '.$a.' = ';
    echo $sum;
}
sum(10);
?>