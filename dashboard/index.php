<?php
session_start();

if(!isset($_SESSION)) {
    include '../views/login.php';
    return;
}

include '../models/User.php';

$action = filter_input(INPUT_POST, 'action');

switch($action) {
    case 'add_todo':
        break;
    case 'update_todo':
        break;
    case 'delete_todo':
        break;
    default:
        break;
}

$todos = User::getTodos($_SESSION['id']);
include '../views/dashboard.php';

 ?>
