<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "");
$pdo->exec("INSERT INTO diworks_keijiban (handlename, title, comments)
VALUES ('" . $_POST['handlename'] . "','" . $_POST['title'] . "','" . $_POST['comments'] . "');");


header("Location:http://localhost/diworks_keijiban/index.php"); // データの挿入が完了したら元のページにリダイレクト
?>
