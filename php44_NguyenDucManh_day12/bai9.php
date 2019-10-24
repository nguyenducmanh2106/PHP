<?php
function lowercase($arrs){
    foreach($arrs as $key=>$value)
        $arrs[$key]=strtolower($arrs[$key]);
    echo"<pre>";
    print_r($arrs);
    echo"</pre>";
}
$arrs = ['a','b','ABC'];
lowercase($arrs);
$arrs = ['1', 'B', 'C', 'E'];
lowercase($arrs);
$arrs = ['a', 0, null, false];
lowercase($arrs);
?>