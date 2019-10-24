<?php
function detele_param($arr){
    foreach($arr as $key=>$value){
        if($key==3)
            unset($arr[$key]);
    }
    $arr_new=array_values($arr);
    echo"<pre>";
    print_r($arr_new);
    echo"</pre>";
}
$array = array(1, 2, 3, 4, 5);
detele_param($array);
?>