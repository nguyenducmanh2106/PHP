<?php
function sum($arrs){
    $sum=0;
    foreach($arrs as $value){
        $sum+=$value;
    }
    return $sum;
}
function minus($arrs){
    $minus=$arrs[0];
    for($key=1;$key<count($arrs);$key++){
        $minus-=$arrs[$key];
    }
    return $minus;
}
function multiple($arrs){
    $multiple=1;
    foreach($arrs as $value){
        $multiple*=$value;
    }
    return $multiple;
}
function div($arrs){
    $div=$arrs[0];
    for($key=1;$key<count($arrs);$key++){
        $div/=$arrs[$key];
    }
    return $div;
}
function display_sum($arrs){
    $tong=$arrs[0];
    for($key=1;$key<count($arrs);$key++){
        if($arrs[$key]<0){
            $tong=$tong.$arrs[$key];
        }
       else $tong=$tong.'+'.$arrs[$key];
    }
    echo"tổng các phần tử = $tong = ".sum($arrs);
    echo"<br/>";
}
function display_multiple($arrs){
    $tich=$arrs[0];
    for($key=1;$key<count($arrs);$key++){
        $tich=$tich.'*'.$arrs[$key];
    }
    echo"tích các phần tử = $tich = ".multiple($arrs);
    echo"<br/>";
}
function display_minus($arrs){
    $hieu=$arrs[0];
    for($key=1;$key<count($arrs);$key++){
        if($arrs[$key]<0){
            $hieu=$hieu.'- ('.$arrs[$key].')';
        }
       else $hieu=$hieu.'-'.$arrs[$key];
    }
    echo"hiệu các phần tử = $hieu = ".minus($arrs);
    echo"<br/>";
}
function display_div($arrs){
    $thuong=$arrs[0];
    for($key=1;$key<count($arrs);$key++){
        $thuong=$thuong.'/'.$arrs[$key];
    }
    echo"thương các phần tử = $thuong = ".div($arrs);
    echo"<br/>";
}

echo"<h1>mảng arrs=[2,5,6,9,2,5,6,12,5]</h1>";
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
echo display_sum($arrs).display_multiple($arrs)
    .display_minus($arrs).display_div($arrs);
echo"<h1>mảng arrs=[2,5,2]</h1>";
$arrs = [2, 5, 2];
echo display_sum($arrs).display_multiple($arrs)
    .display_minus($arrs).display_div($arrs);
echo"<h1>mảng arrs=[22,5,-1]</h1>";
$arrs = [22, 5, -1];
echo display_sum($arrs).display_multiple($arrs)
    .display_minus($arrs).display_div($arrs);
echo"<h1>mảng arrs=[1,5,-1]</h1>";
$arrs = [1, 5, -1];
echo display_sum($arrs).display_multiple($arrs)
    .display_minus($arrs).display_div($arrs);
?>
