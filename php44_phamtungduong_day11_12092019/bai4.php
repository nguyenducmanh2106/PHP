<?php
function show($a){
    for ($i=1;$i<=$a;$i++){
        if($i<$a){
            echo $i.'-';
        }else{
            echo $i;
        }
    }
}
show(5);
?>