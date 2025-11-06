<?php
session_start();

 // unset($_SESSION['fld_admin_id']);
 // unset($_SESSION['fld_admin_email']);


session_destroy();

echo "<script>";

echo 'window.location.href="index.php";';
echo "</script>";
?>