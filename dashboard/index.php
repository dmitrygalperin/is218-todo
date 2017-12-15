<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

date_default_timezone_set('America/Los_Angeles');
session_start();

if(!isset($_SESSION)) {
    include '../views/login.php';
    return;
}

include '../models/Database.php';
include '../models/User.php';
include '../models/Todo.php';

$action = filter_input(INPUT_POST, 'action');

switch($action) {
    case 'add_todo':
        $status = add_todo();
        show_dashboard($status);
        break;
    case 'update_todo':
        break;
    case 'delete_todo':
        $status = delete_todo();
        show_dashboard($status);
        break;
    case 'toggle_todo':
        $status = toggle_todo();
        show_dashboard($status);
        break;
    default:
        show_dashboard();
        break;
}

function add_todo() {
    $todo = new Todo();
    $todo->setUserId($_SESSION['id']);
    $todo->setTitle(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
    $todo->setCompleted(0);
    $todo->setUserEmail($_SESSION['email']);
    $todo->setDueDate(filter_input(INPUT_POST, 'due-date', FILTER_SANITIZE_SPECIAL_CHARS));
    return $todo->create();
}

function delete_todo() {
    $id = filter_input(INPUT_POST, 'todo-id', FILTER_VALIDATE_INT);
    return Todo::deleteTodoById($id);
}

function toggle_todo() {
    $id = filter_input(INPUT_POST, 'todo-id', FILTER_VALIDATE_INT);
    return Todo::toggleCompletedById($id);
}

function show_dashboard($status = null) {
    $todos = Todo::getTodosByUserId($_SESSION['id']);
    include '../views/dashboard.php';
}

 ?>
