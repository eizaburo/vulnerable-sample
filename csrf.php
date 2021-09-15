<?php

//パラメータ取得
$username = $_COOKIE["username"]; //user情報はCOOKIEから取得
$product_name = $_POST["product_name"];
$price = $_POST["price"];
$amount = $_POST["amount"];

//注文内容生成
date_default_timezone_set('Asia/Tokyo');
$message = $username . "さんが" . $price . "円の" . $product_name . "を" . $amount . "個購入しました。時間は" . date("Y-m-d H:i:s") . "\n";
//注文内容書き込み
file_put_contents("./order_list.txt", $message, FILE_APPEND | LOCK_EX);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>CSRF Sample</title>
</head>

<body>
    <h1>CSRF Sample</h1>
    <h3><?php echo $username . "さん。ご購入ありがとうございました。"; ?></h3>
    <p>商品：<?php echo $product_name; ?></p>
    <br />
    <a href="./index.html">戻る</a>
</body>

</html>