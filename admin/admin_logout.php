<?php
include 'connect.php';
session_start();

unset($_SESSION['user']);
session_destroy();
header('location:admin_login.php');

?>