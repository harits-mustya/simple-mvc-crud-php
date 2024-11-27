<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once 'controllers/controller.php';
require_once 'config/database.php';

$controller = new controller($pdo);

$action = $_GET['action'] ?? 'index';

// if ($action === 'add') {
//     $controller->insert();
// }elseif ($action === 'update') {
//     $controller->update();
// }elseif ($action === 'delete') {
//     $controller->delete();
// }elseif ($action === 'index') {
//     $controller->index();
// }else{
//     echo "Invalid Action";
// }

switch ($action) {
    case "index":
        $controller->index();
    break;
    case "add"  :
        $controller->insert();
    break;
    case "update":
        $controller->update();
    break;
    case "delete":
        $controller->delete();
    break;
}




