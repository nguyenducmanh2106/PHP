<?php
echo"<h1>Toán tử</h1>";
echo"<h1>Toán tử số học</h1>";
//cộng ,trừ,nhân,chia,chia dư
$number1=5;
$number2=2;
$remain=$number1 % $number2;
echo"Phần dư của $number1 % $number2 = $remain";
//$sum=$number1-- -2*$umber2++ + --$number1 %2 - ++$number2;

echo"<h1>Toán tử so sánh</h1>";
$number1=5;
$number2=4;
echo"<br/>";
var_dump($number1==$number2);
echo"<h1>Toán tử logic</h1>";
//and-&&
//or-||
//toán tử not-!
$number1=-1;
$number2=2;
$check=($number1>0)&&($number2>0);
var_dump($check);
echo"<h2>Toán tử gán</h2>";
//đặc trưng bởi kí tự =
$a=-2;
$b=5;
$b*=--$b+($a-- * --$b)/($a-- - --$b);
echo $b;
echo"<h2>Toán tử điều kiện</h2>";
//sử dụng toán tử ?
$check=5>4?"ok":"no";
//if(5>4){
//    $check="ok";
//}
//else{
//    $check="no";
//}
$no1=10;
$no2=7;
$value=$no1+$no2;
echo"$no1+$no2= $value";
echo"<br/>";
$no1=10;
$no2=7;
$value=$no1-$no2;
echo"$no1-$no2= $value";
echo"<br/>";
$no1=10;
$no2=7;
$value=$no1*$no2;
echo"$no1*$no2= $value";
echo"<br/>";
$no1=10;
$no2=7;
$value=$no1/$no2;
echo"$no1/$no2= $value";
echo"<br/>";
$no1=10;
$no2=7;
$value=$no1%$no2;
echo"$no1%$no2= $value";
echo"<br/>";
$a=8;
echo"<span style='color:red'>";
echo"Giá trị hiện tại là $a";
echo"<br/>";
echo"cộng thêm 2. Giá trị hiện tại là ".($a+=2);
echo"<br/>";
echo"</span>";
?>
<?php
echo"<h1>Biểu thức điều kiện</h1>";
echo"<h2>If,if...else,if...else if,switch..case</h2>";
$a=5;
if($a>0){
    echo"a>0";
}
//if.else
if($a>4){
    echo"a>4";
}
else{
    echo"a<4";
}
//if.else if
if($a==1){
    echo'a dang có giá trị là 1';
}
else if($a==2){
    echo"a đang có giá trị là 2";
}
else{
    echo"a đang có giá trị khác 1,2";
}
//switch.case
switch($a){
    case 1:
        echo"a đang có giá trị là 1";
        break;
    case 2:
        echo"a đang có giá trị là 2";
        break;
    case 4:
        echo"a đang có giá trị là 4";
        break;
    default:
        echo"a đang có giá trị khác 1,2,4";
        break;
}

//hiển thị một chuỗi html bất kì
$number=2;
if($number>0){
    echo"<h1>số lơn hơn 0</h1>";
}

?>
<?php if($number>0):?>
<h1>
    số lớn hơn 0
</h1>
<?php endif; ?>
<?php if($number>0):?>
<h1>Number>0</h1>
<? else:?>
<h5>Number<0</h5>
<?php endif;?>
<h1>Vòng lặp</h1>
<h2>For,while,do-while</h2>
<?php
//vòng lặp for
for($i=0;$i<10;$i++){
    if($i==5){
        continue;
    }
    echo"$i<br/>";
}
echo"<br/>";
for($i=0;$i<=100;$i++){
    if($i%2==0){
        if($i==100){
            echo"$i";
            continue;
        }
        echo"$i,";

    }

}
echo"<br/>";
function kiemtra($a){
    for($i=2;$i<$a;$i++){
        if($a%$i==0){
            return false;
        }
        return true;
    }
}
$result1=kiemtra(5);
$result2=kiemtra(12);
$result3=kiemtra(27);
$result4=kiemtra(29);
if($result1==1){
    echo"5 là số nguyên tố";
}
else{
    echo"5 không phải số nguyên tố";
}
echo"<br/>";
if($result2==1){
    echo"12 là số nguyên tố";
}
else{
    echo"12 không phải số nguyên tố";
}
echo"<br/>";
if($result3==1){
    echo"25 là số nguyên tố";
}
else{
    echo"25 không phải số nguyên tố";
}
echo"<br/>";
if($result4==1){
    echo"27 là số nguyên tố";
}
else{
    echo"27 không phải số nguyên tố";
}
echo"<br/>";
function gt($a){
    if($a<=1)
        return 1;
    else return gt($a-1)*$a;
}

function hienthi($a){
    for($i=1;$i<=$a;$i++){
        if($i==$a){
            $mul=1*$i;
            echo"$mul";
            continue;
        }
        $mul=1*$i;
        echo"$mul x";

    }
}
$ketqua=gt(5);
echo"5!=";
hienthi(5);
echo"=$ketqua";
?>
