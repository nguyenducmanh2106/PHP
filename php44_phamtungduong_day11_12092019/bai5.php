<?php
function tinh($a){
    $sum=0;
    for ($i=1;$i<=$a;$i++){
        $sum +=1/$i;
    }
    echo $sum;
}
function show($a){
    for ($i=1;$i<=$a;$i++) {
        if ($i < $a) {
            echo '1/'.$i . '+';
        } else {
            echo '1/'.$i;
        }
    }
}
$a=5;
echo 'S('.$a.') = ';
echo show($a).' = ';
echo tinh($a);
?>