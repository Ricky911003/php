<?php
session_start();
if($_SESSION["login"] == "yes"){
    if(($_SESSION["id"] == "a1103351")&& ($_SESSION["pwd"] == "1") ){ 

    }

}else{
    header("Refresh:3;url=fail.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


