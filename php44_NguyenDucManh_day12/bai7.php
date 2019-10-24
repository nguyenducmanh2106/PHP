<?php $array=[12,5,10,125,60,90,345,-123,-125,0];$display=""; foreach($array as $key=>$value): ?>
<?php if($value>=100&&$value<=200&&$value%5==0):?>
    <?php
  $display=$display.$value.",";
        ?>
<?php endif;?>
<?php endforeach;?>
<?php
echo"Các số từ 100 đến 200 và chia hết cho 5 trong mảng đã cho là : $display";
?>
