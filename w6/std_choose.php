<?php
session_start();
if($_SESSION["login"] == "yes"){
    if(($_SESSION["id"] = "a1103351") && ($_SESSION["pwd"] = "1")){

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
    <title>同學好</title>
</head>
<body>
    <p>同學好，請進</p>
    <a href=std.php>點選我進入頁面</a>
</body>
</html>