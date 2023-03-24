<?php
session_start();
$std_id = "a1103351";
$std_pwd = "1";

$teacher_id = "a1103351";
$teacher_pwd = "12";

$principle_id = "a1103351";
$principle_pwd = "123";


$id = $_POST["id"];
$pwd = $_POST["pwd"];

if(($std_id == $id)&& ($std_pwd == $pwd)){
    $_SESSION["login"] = "yes";
    $_SESSION["id"] = "a1103351";
    $_SESSION["pwd"] = "1";
    header("Location:std_choose.php");
}elseif(($teacher_id == $id)&& ($teacher_pwd == $pwd)){
    $_SESSION["login"] = "yes";
    $_SESSION["id"] = "a1103351";
    $_SESSION["pwd"] = "12";
    header("Location:teacher_choose.php");
}elseif(($principle_id == $id)&& ($principle_pwd == $pwd)){
    $_SESSION["login"] = "yes";
    $_SESSION["id"] = "a1103351";
    $_SESSION["pwd"] = "123";
    header("Location:prnciple_choose.php");
}else{
    $_SESSION["login"] = "no";
    header("Location: fail.php");
}


?>
