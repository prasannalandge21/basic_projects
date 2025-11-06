<?php
session_start();

 unset($_SESSION['user_id']);
 unset($_SESSION['user_email']);


session_destroy();

echo "<script>";

echo 'window.location.href="index.php";';
echo "</script>";
?>