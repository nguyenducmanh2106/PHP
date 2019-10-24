<?php
function display($n){
    for ($i = 1; $i <= $n; $i++){
        if($i==$n){
            echo"1/$i = ";
            break;
        }
        echo"1/$i +";
    }
}
function result($n){
    $sum = 0;
    for ($i = 1; $i <= $n; $i++)
        $sum += 1 / $i;
    return $sum;
}
$n=10;
echo"S($n) =";
display($n);
echo result($n);
?>