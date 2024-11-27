<?php

$db_host = "localhost";
$db_name = "home_data";
$db_username = "happy_code";
$db_password = "4dm1n.code";

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: " . $e->getMessage());
}
