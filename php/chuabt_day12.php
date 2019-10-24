<h1>chữa bt day12</h1>
<h2>bai-1</h2>
<?php
function tinhchuvi($width,$height){
    $chuvi=($width+$height)*2;
    return $chuvi;
}
function tinhdientich($width,$height){
    $dientich=($width*$height);
    return $dientich;
}
$chuvi=tinhchuvi(4,2);
echo"chu vi = $chuvi";
?>
<h2>bai-10</h2>
<style>
    .black{
        background:#000;
    }
    .white{
        background:#fff;
    }
    td{width: 20px;height: 20px}
</style>
<table border="1" cellspacing="0">
    <?php for($row=1;$row<=8;$row++):?>
        <tr>
            <?php for($col=1;$col<=8;$col++):?>
                <?php
                $class=($col+$row)%2?"white":"black";
                ?>
                <td class="<?php echo $class?>">
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>
<h2>bai-11</h2>
<style>
    .blue{
        background: green;
    }
</style>
<?php
/**
 * checking number is Prime or not
 * @param $number
 * @return
 */
function isPrime($number){
    if($number==1)
        return false;
    for($i=2;$i<=sqrt($number);$i++){
        if($number%$i==0)
            return false;
    }
    return true;
}
?>
<table border="1" cellspacing="0" cellpadding="6">
    <tr>
        <?php for($i=1;$i<=100;$i++):
            $isPrime=isPrime($i);
        $class='';
        if($isPrime){
            $class='blue';
        }
        ?>
            <td class="<?php echo $class?>">
                <?php echo$i; ?>
            </td>
        <?php if($i%10==0): ?>
    <tr></tr>
        <?php endif;?>
        <?php endfor;?>
    </tr>
</table>
