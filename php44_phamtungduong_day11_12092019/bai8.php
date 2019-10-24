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
    for ($m=$a;$m>0;$m--){
        for ($n=1;$n<=$m;$n++){
            echo '*';
            if($n<$m){
                echo ' ';
            }
        }
        echo '<br/>';
    }
}
vehinh(5);
?>