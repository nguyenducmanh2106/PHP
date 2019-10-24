<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];
foreach($array1 as $key=>$value){
       array_unshift($array1[$key],$array2[$key]);
}
echo"<pre>";
print_r($array1);
echo"</pre>";
?>