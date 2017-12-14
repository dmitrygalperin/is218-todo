<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

if(isset($_SESSION)) {
  require './dashboard/index.php';
} else {
  require './views/home.php';
}
?>
