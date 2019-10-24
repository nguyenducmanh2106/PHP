<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$keysAndValues=array_combine($keys,$values);
?>
<?php
echo"<pre>";
print_r($keysAndValues);
echo"</pre>";
?>
