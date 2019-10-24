<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565
];
echo"Phần tử đầu tiên của mảng là ".reset($numbers);
echo"<br/>";
echo"Phần tử cuối cùng của mảng là ".end($numbers);
echo"<br/>";
echo"Số lớn nhất của mảng là ".max($numbers);
echo"<br/>";
echo"Số nhỏ nhất của mảng là ".min($numbers);
echo"<br/>";
echo"Tổng các giá trị của mảng là ".array_sum($numbers);
echo"<br/>";

sort($numbers);
echo"Mảng sx tăng dần theo giá trị là <br/>";
echo"<pre>";
print_r($numbers);
echo"</pre>";
echo"<br/>";

rsort($numbers);
echo"Mảng sx giảm dần theo giá trị là <br/>";
echo"<pre>";
print_r($numbers);
echo"</pre>";
echo"<br/>";

ksort($numbers);
echo"Mảng sx tăng dần theo key là <br/>";
echo"<pre>";
print_r($numbers);
echo"</pre>";
echo"<br/>";

asort($numbers);
echo"Mảng sx giảm dần theo key là <br/>";
echo"<pre>";
print_r($numbers);
echo"</pre>";
echo"<br/>";
?>