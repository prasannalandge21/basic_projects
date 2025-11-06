
<?php
session_start();
?>
<?php 
include "include/config.php";



	
$add=mysqli_query($connect,"Update tbl_medicine set fld_medicine_req='no_request' ,fld_medicine_request='no_request' and fld_medicine_req='no_request' where fld_medicine_id='".$_GET['a_id']."'") or die(mysqli_error($connect));



       


if($add)
		{
				echo "<script>";
				echo "alert('Your Request cancle successfully');";
				echo "window.location.href='medicine_requested_to_user.php'";
				// echo "window.location.href='view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='medicine_requested_to_user.php;";
				echo "</script>";
			}
?>