<?php

try
{
$pdo = new PDO('mysql:host=localhost;dbname=ere', 'root', 'root' ) ;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
$error = 'He удалось подключиться к серверу баз данных.';
include 'error.html.php';
exit();
}


?>
