<?php
//code php ở dây
echo"<h1>php-Khai báo biến</h1>";
echo"<br/>";
$name;
$age=11;
$name1='manh';$name2='abc';
echo"Tên của bạn là:".$name1;

echo"<h1>php-Các kiểu dữ liệu của biến</h1>";
echo"<br/>";
//1-Kiểu Int
$age=12;
echo'Kiểu dữ liệu của chuỗi là:';
var_dump($age);

//2-Kiểu string
$name="String 1";
$name1="string 2";
echo'<br/>';
echo'Biến name có kiểu dữ liệu:';
//is_string($name);
var_dump($name);

//3-Float/Double-Kiểu số thực
$number1=3.5;
echo'<br/>';
echo'Biến number1 có kiểu dữ liệu là:';
var_dump($number1);
//echo is_float($number1);
//echo is_double($number1);

//4-Boolean-true/false
//với javascript chỉ nhận 2 giá trị duy nhất là true và false
//với php thì giá trị true/false là không phân biệt viết hoa hoặc thường
$isTrue=TRUE;
//
$isFalse=false;
echo'Biến isTrue có giá trị là:';
is_bool($isTrue);
var_dump($isTrue);

//5-NULL
//có 1 giá trị duy nhất là null
$varNull=null;
echo'<br/>';
echo'Biến varNull có giá trị là:';
var_dump($varNull);
is_null($varNull);

//6-Array-Mảng
$arr=array(1,3.5,'string',true,null,array(1,2,3));
$arr1=[1,2.3,true,[1,2,3]];
//xem cấu trúc mảng
echo'<br/>';
echo'cấu trúc của mảng arr1';
var_dump($arr1);
echo'<br/>';

//khi hiển thị kiểu dữ liệu dạng có cấu trúc như mảng, object thì nên sử dựng thẻ<pre> kết hơp với hàm print_r
echo'<pre>';
print_r($arr1);
echo'</pre>';
//is_array($arr1);

//7-Object-Kiểu đối tượng
class person{

}
    $person=new person();
    is_object($person);
    print_r($person);

 echo'<h1>Ép kiểu dữ liệu</h1>';
 //các từ khóa ép kiểu cho phép trong PHP-int,boolean,string,array,object
 $var=12;
 echo'kiểu dữ liệu ban đầu của biến var là:';
 var_dump($var);
 $var=(float)$var;
echo'<br/>kiểu dữ liệu sau khi được ép kiểu của biến var là:';
var_dump($var);


//8-Hằng
echo'<h1>Khai báo hằng trong PHP</h1>';
//khai báo hằng trong php
//cách1
define('MAX_SIZE',14);
//cách2
const PI=3.14;
//hiển thị
//cách1
echo "hằng Max-size có giá trị là:".constant("MAX_SIZE");
//cách2
echo'<br/>Hằng PI có giá trị là:'.PI;

//1 số hằng định nghĩa sẵn trong PHP
echo'<br/>SÔ dòng hiện tại của code này là:'.__LINE__;
echo'đường dẫn tuyệt đối đang gọi hằng _FILE_là: '.__FILE__;
echo'<h1>Hàm</h1>';
//Hàm
//1-Hàm có sẵn của PHP
//echo,var_dumpt(),print_r()...
//2-Hàm tự định nghĩa
//hàm không có tham số, không có từ khóa return
function displayInfor(){
    echo'<h5>Text trong hàm</h5>';
}
displayInfor();
//hàm có tham số
function displayName($name){
    //việc hiển thị giá trị biến ngay trong chuỗi thì chỉ áp dụng với dấu nháy kép
    echo'<br/>';
    echo"Hello,$name";
    echo'<br/>';
}
displayName('Manh');

//Hàm có tham số được khởi tạo mặc định
function displayAge($age=15){
    echo'<br/>';
    echo"tuổi của bạn là:$age";
    //return null;
}

//hàm có giá trị trả về, sử dụng từ khóa return
function sum($number1,$number2){
    $sum=$number1+$number2;
    return $sum;
}
$sum=sum(1,2);
echo"<br/>tổng của 2 số là:$sum";

//hàm truyền tham số theo kiểu tham chiếu và tham trị
//truyền tham trị
$varValue=1;
echo"<br/>Biến varValue ban đầu đang có giá trị là:$varValue";
function changeVarValue($varValue){
    $varValue=3;
    echo"<br/>Biến varValue bên trong hàm đang có giá trị là:$varValue";
}
changeVarValue($varValue);
echo'<br/>';
echo"Biến varValue sau khi thay đổi trong hàm có giá trị là:$varValue";
//truyền tham chiếu
$varRerfer=5;
echo"<p>Biến varRerfer ban đầu đang có giá trị là:$varRerfer</p>";
function changeVarRerfer(&$varRerfer){
    $varRerfer=12;
    echo"<p>Biến varRerfer bên trong hàm đang có giá trị là:$varRerfer</p>";
}
changeVarRerfer($varRerfer);
echo"<p>Biến varRerfer sau khi gọi hàm đang có giá trị là:$varRerfer</p>";

echo"<h1>Tìm hiểu các hàm import file trong PHP</h1>";
echo"<h2>include,inclue_once,require,require_once</h2>";
include"đường dẫn tương đối hoặc tuyệt đối";
include"hello-world.php";
//require"hello-world.php";-giống include
//include_once-chỉ dẫn ra một lần
include_once"hello-world.php";
//require-nếu file dẫn không tồn tại thì code dưới không chạy.Còn include-nếu file dẫn không tồn tại thì code dưới vẫn hiển thị
//include"aafasfsfs.php";
//require "àafsf";
echo"text chạu sau cùng file của bạn";
?>