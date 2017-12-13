<?php

$action = filter_input(INPUT_POST, 'action');

switch($action) {
    case 'register':
        break;
    default:
        include '../views/register.php';
}

?>
