<?php

echo "Hello World.";
// echo phpinfo();

$dbhost = '127.0.0.1';
$dbuser = 'admin';
$dbpass = '123456';
$dbname = 'test';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//mysqli 預設編號為latin-1，建立資料庫已指定utf8編碼，所以要指定連線時所用編碼
$mysqli->query("SET NAMES utf8");

$name = '王小明';
$mail = 'aaa@gmail.com';
$home = '台南縣新化區中正路1號';
$message = '第一筆資料';
 
$sql = "INSERT INTO `users` (name, mail, home, message) VALUES ('$name','$mail','$home','message')";
$stmt = $mysqli->query($sql);

$mysqli->close();