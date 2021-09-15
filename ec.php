<?php

$username = $_COOKIE["username"];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>CSRF Sample</title>
</head>

<body>
    <h1>CSRF Sample</h1>
    <h3><?php echo $username . "さん。購入お願いします。"; ?></h3>
    <form method="post" action="./csrf.php">
        商品:<input type="text" name="product_name" value="apple"><br/>
        価格:<input type="text" name="price" value="300"><br/>
        数量:<input type="text" name="amount" value="1"><br/>
        <input type="submit" value="購入する"/>
    </form>
    <br/>
    <a href="./index.html">戻る</a>
</body>

</html>