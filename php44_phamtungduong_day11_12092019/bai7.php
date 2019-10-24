<?php
function vehinh($a){
    for ($i=1;$i<=$a;$i++){
        for ($j=1;$j<=$i;$j++){
            echo '*';
            if($j<$i){
                echo ' ';
            }
        }
        echo '<br/>';
    }
}
$a=6;
vehinh($a);
?>