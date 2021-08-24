<?php

$value = 3;
echo $value + 7;
echo "\n";

$array= ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月' ];
echo $array[7];
echo "\n";
$hello ='”Hello, ';
$name ="kota yamashita";
$world =' ‘s World!”' ;
echo $hello.$name.$world;
echo "\n";
$value = 'tech';
// $value = $value . ' boost'; 
$value .= ' boost';
echo $value;

$calendar_2020 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
];
echo $calendar_2020["December"];

?>
