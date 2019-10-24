<?php
function calcu_avarage($arr){
    $sum=0;
    foreach($arr as $key=>$value){
        $sum+=$value;
    }
    return $sum/count($arr);
}
function find_max_avarage($arr){
    $avarage=calcu_avarage($arr);
    foreach($arr as $key=> $value){
        if($arr[$key]>$avarage)
            echo $arr[$key].",";
    }
}
function find_min_avarage($arr){
    $avarage=calcu_avarage($arr);
    foreach($arr as $key=> $value){
        if($arr[$key]<$avarage)
            echo $arr[$key].",";
    }
}
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
echo calcu_avarage($numbers);
echo"<br/>";
find_max_avarage($numbers);
echo"<br/>";
find_min_avarage($numbers);
?>