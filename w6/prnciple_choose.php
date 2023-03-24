<?php
session_start();
if($_SESSION["login"] == "yes"){
    if(($_SESSION["id"] = "a1103351") && ($_SESSION["pwd"] = "123")){
        
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
    <title>校長好</title>
</head>
<body>
    <p>校長好，請選擇網頁</p>
    <a href= principal.php>進入校長頁面</a>
    <a href= teacher.php>進入老師頁面</a>
</body>
</html>