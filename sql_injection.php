<?php

$username = $_POST["username"];
$password = $_POST["password"];

$message = "...";

//db準備
$db = new SQLite3("test.db");
//tableがあれば削除
$db->exec("drop table if exists members");
//table作成
$db->exec("create table members(
    id integer primary key autoincrement,
    username text,
    password text,
    age integer
)");
//ダミーデータ登録
$db->exec("insert into members(username,password,age) values('hoge','hoge',11)");
$db->exec("insert into members(username,password,age) values('foo','foo',22)");
$db->exec("insert into members(username,password,age) values('bar','bar',33)");

//認証+MyPage的機能
// hoge' or 1=1;--
$sql = "select * from members where username = '" . $username . "' and password = '" . $password . "'";
$res = $db->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>SQL Injection Sample</title>
</head>

<body>
    <h1>SQL Injection Sample</h1>
    <h3>お客様情報</h3>
    <?php
    while ($row = $res->fetchArray()) {
        echo ("ID: " . $row["id"] . "<br/>");
        echo ("Username: " . $row["username"] . "<br/>");
        echo ("Password: " . $row["password"] . "<br/>");
        echo ("Age: " . $row["age"] . "<br/>");
    }
    ?>
    <br />
    <p><?php echo $sql; ?></p>
    <br />
    <a href="./index.html">戻る</a>
</body>

</html>