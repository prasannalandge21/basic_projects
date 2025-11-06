
<?php
session_start();
?>
<?php 
include "include/config.php";



	
$add=mysqli_query($connect,"Update tbl_medicine set fld_medicine_request='request approved by admin, request send to user' where fld_medicine_id='".$_GET['a_id']."'") or die(mysqli_error($connect));



       


if($add)
		{
				echo "<script>";
				echo "alert('User Request approved');";
				echo "window.location.href='medicine_user_request.php'";
				// echo "window.location.href='view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='medicine_user_request.php;";
				echo "</script>";
			}
?>