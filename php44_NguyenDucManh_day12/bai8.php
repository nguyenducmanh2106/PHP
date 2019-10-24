<?php
$array=['programming','program is C++', 'php', 'ks','basic', 'dev', 'is', 'program is PHP'];
/**
 * @param $array
 *string_max-tìm và in ra "các phần tử" có "độ dài lớn nhất" trong mảng
 */
function string_max($array){
    $string_max=$array[0];
    foreach($array as $key=>$value)
    {
        if(strlen($array[$key])>=strlen($string_max))
            $string_max=$array[$key];

    }
    foreach($array as $key=>$value){
        if(strlen($array[$key])==strlen($string_max)){
            echo"<i>";
            echo"Chuỗi lớn nhất là ".$array[$key].", độ dài = ".strlen($array[$key]);
            echo"</i>";
            echo"<br/>";
        }
    }
}
/**
 * @param $array
 *string_min-tìm và in ra "các phần tử" có "độ dài nhỏ nhất" trong mảng
 */
function string_min($array){
    $string_min=$array[0];
    foreach($array as $key=>$value)
    {
        if(strlen($array[$key])<=strlen($string_min))
            $string_min=$array[$key];

    }
    foreach($array as $key=>$value){
        if(strlen($array[$key])==strlen($string_min)){
            echo"<i>";
            echo"Chuỗi nhỏ nhất là ".$array[$key].", độ dài = ".strlen($array[$key]);
            echo"</i>";
            echo"<br/>";
        }
    }
}
string_max($array);
string_min($array);
?>