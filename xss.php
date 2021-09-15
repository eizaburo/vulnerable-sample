<?php

$username = $_POST["username"];
$password = $_POST["password"];

setcookie("username",$username);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>XXS Sample</title>
</head>

<body>
    <h1>XXS Sample</h1>
    <h3><?php echo $username . "さん。ようこそ。"; ?></h3>
    ID:<?php echo $username; ?><br />
    PW:<?php echo $password; ?><br />
    <br/>
    <a href="./ec.php">商品注文ページへ</a><br/>
    <a href="./index.html">戻る</a>
</body>

</html>