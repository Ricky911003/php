<?php

$stdName = $_POST["stdName"];
echo "您的名字為: " .$stdName. "<br>";

$stdid = $_POST["stdid"];
// echo "用POST測試將HTML內容傳入PHP:<br>";
echo "今天的日期為".$stdid. "<br>";
$comments = $_POST["comments"];
echo "您的意見: <br>";
echo nl2br($comments). "<br>";


$interest = $_POST['interest'];
echo "您想吃的肉是: " .$interest. "<br>";

// $country = $_POST["country"];
// foreach ( $country as  $wanttoeat) {
//     echo $wanttoeat." ";
// }

?>
