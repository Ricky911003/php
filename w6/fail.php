<?php ob_start(); ?>
<?php
session_start();

if($_SESSION["login"] == "no"){

}else{
    header("Location:error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fail.php</title>
</head>
<body>
    <p>登入失敗 兩秒後跳轉頁面</p>
    <a href="login.php">點選這裡</a>
    <?php
    
    header("Refresh:3;url=login.php")
    ?>
</body>
</html>

<?php ob_flush();?>