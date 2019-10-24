<?php
function uppercase($arr){
    foreach($arr as $key=>$value){
        $arr[$key]=strtoupper($arr[$key]);
    }
    echo"<pre>";
    print_r($arr);
    echo"</pre>";
}
$arrs = ['a','b','ABC'];
uppercase($arrs);
$arrs = ['1', 'B', 'C', 'E'];
uppercase($arrs);
$arrs = ['a', 0, null, false];
uppercase($arrs);
?>