<?php
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
   ),
   "b"=>array(
       "e"=>2,
       "o"=>array(
           "b"=>3
       )
   )
);

echo"phần tử có key = b có giá trị là ".$a['b']['o']['b'];
echo"<br/>";
echo"phần tử có key = c có giá trị là ".$a['a']['c'];
echo"<br/>";
echo"<pre>";
$information_a=$a['a'];
echo"<pre>";
print_r($information_a);
echo"</pre>";
?>