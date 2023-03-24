<?php
session_start();
if($_SESSION["login"] == "yes"){
    if(($_SESSION["id"] = "a1103351") && ($_SESSION["pwd"] = "12")){
        
    }

}else{
    header("Refresh:3;url=error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>老師好</title>
</head>
<body>
    <?php
    echo $_SESSION["id"];
    echo $_SESSION["pwd"];
    ?>

    <p>老師好，請選擇網頁</p>
    <a href=teacher.php>點選我進入老師頁面</a>
    <a href=std.php>點選我進入學生頁面</a>
</body>
</html>