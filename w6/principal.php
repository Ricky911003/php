<?php
session_start();
if($_SESSION["login"] == "yes"){
    // echo "歡迎進入校長系統";
    // echo $_SESSION["id"];
    // echo $_SESSION["pwd"];
    if(($_SESSION["id"] = "a1103351") && ($_SESSION["pwd"] = "123")){
    
    }

}else{
    header("Refresh:1;url=error.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>校長的系統</title>
</head>
<body>
    <p>這是校長的系統</p>
   <a href="logout.php" >點我登出</a>

</body>
</html>