<?php

$db_host = "localhost";
$db_name = "PUT YOUR DATABASE NAME";
$db_username = "PUT YOUR USERNAME";
$db_password = "PUT YOUR PASSWORD";

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: " . $e->getMessage());
}
