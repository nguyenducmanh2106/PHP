<?php
//Khai báo khi không dùng mảng
    $staff1="Nhân viên 1";
    $staff1="Nhân viên 2";
    $staff1="Nhân viên 3";
    $staff1="Nhân viên 4";
    $staff1="Nhân viên 5";
    //khai báo dùng mảng
$arrStaff1=array('nhân viên 1','nhân viên 2','nhân viên 3','nhân viên 4','nhân viên 5');
$arrStaff2=['nhân viên 1','nhân viên 2','nhân viên 3','nhân viên 4','nhân viên 5'];
$arr3=[
    'string',
    1234,
    true,
    null,
    [1,2,3],
    new ArrayObject()
];
var_dump($arr3);
echo"<pre>";
print_r($arr3);
echo"</pre>";

//vòng lặp foreach
//demo vòng lặp for để hiển thị các giá trị của phần tử
$arrDemo=[123,'string',-123,true];
//với giá trị 123 thì key =0 và value=123
for($i=0;$i<count($arrDemo);$i++)
    echo"phần tử có key=$i có giá trị là: ".$arrDemo[$i]."<br/>";
echo"<h1>Sử dụng vòng lặp foreach</h1>";
//sử dụng vòng lặp foreach
foreach ($arrDemo as $key=>$value){
    echo"phần tử có key=$key có giá trị là: $value<br/>";
}

//vòng lặp foreach mà bỏ đi key
foreach($arrDemo as $value){
    echo"$value<br/>";
}

echo"<h1>Phân loại mảng</h1>";
echo"<h2>1-Mảng tuần tự-mảng số nguyên</h2>";
$arrType1=[1,3,5];
$arrType2=[
    0=>'abc',
    1=>'def',
    4=>123
];
echo"<pre>";
print_r($arrType2);
echo"</pre>";
foreach($arrType2 as $key=>$value){
    echo"phần tử có key=$key có giá trị là $value<br/>";
}
echo"<h2>2-Mảng kết hợp</h2>";
//key ngoài dạng số như mảng tuần tự, thì còn xuất hiện ở dạng chuỗi
$arrMerge1=[
    'name'=>'Manh',
    'age'=>123,
    4=>false
];
foreach($arrMerge1 as $key=>$value){
    echo"phần tử có key=$key có giá trị là: $value<br/>";
}
echo"<h2>3-Mảng đa chiều</h2>";
//mảng của mảng
$arrMultidimension=[
  'name'=>[
      'member1'=>'mạnh',
      'member2'=>'abc',
      'member3'=>[
          'firstName'=>"nguyễn"
      ]
  ],
  'age'=>123,
  4=>"def"
];
    echo"<pre>";
    print_r($arrMultidimension);
    echo"</pre>";
echo $arrMultidimension['name']['member3']['firstName'];
?>
<h1>bài tập thực hành</h1>
<?php
echo"<h2>bai1</h2>";
$arrs=[12,50,60,90,12,25,60];
$sum=0;
foreach($arrs as $value){
    $sum+=$value;
}
echo$sum;
echo"<h2>bai2</h2>";
$arrs=['đỏ','xanh','cam','trắng'];
$arrs0=$arrs[0];
$arrs1=$arrs[1];
$arrs2=$arrs[2];
$arrs3=$arrs[3];
echo"\"<i>màu</i> <font color='red'>$arrs0</font> là màu yêu thích của 
Anh, $arrs3 là màu yêu thích của Sơn, $arrs2 là màu yêu thích của
 Thắng, còn màu yêu thích của tôi là màu $arrs1\"";
echo"<h2>bai-3</h2>";
$arrs=['PHP','HTML','CSS','JS'];
?>
<table border="1" cellspacing="0">
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php foreach($arrs as $key=>$value):?>
        <tr>
            <td>
                <?php
                echo $value;
                ?>
            </td>
        </tr>
    <?php endforeach;?>
</table>
<?php
echo"<h2>bai-4</h2>";
$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

foreach($arrs as $country=>$capital){
    echo"Thủ đô của $country là $capital<br/>";
}
echo"<h2>bai-5</h2>";
$a=array(
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
echo"phần tử có key là b có giá trị là ".$a["b"]["o"]["b"];

$keys=array(
    "f1"=>"first",
    "f2"=>"second",
    "f3"=>'third'
);
$values=array(
    "f1value"=>"a",
    "f2value"=>"b",
    "f3value"=>"c",
);
$arr3=array_merge($keys,$values);
echo"<pre>";
print_r($arr3);
echo"</pre>";
?>
