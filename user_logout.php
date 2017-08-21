<?php
include 'connect.php';
session_start();

unset($_SESSION['name']);
session_unset();
session_destroy();
header('location:user_login.php');

?>