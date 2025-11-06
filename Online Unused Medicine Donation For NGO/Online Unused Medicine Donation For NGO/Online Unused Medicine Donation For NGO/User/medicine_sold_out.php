<?php 
include "include/config.php";

$fghjg=mysqli_query($connect,"Update tbl_medicine set fld_medicine_request='Medicine Sold Out' where fld_medicine_id='".$_GET['a_id']."'") or die(mysqli_error($connect));
if($fghjg)
		{
				echo "<script>";
				echo "alert('Request cancled');";
				echo "window.location.href='medicine_all_request.php'";
				// echo "window.location.href='view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='medicine_all_request.php;";
				echo "</script>";
			}
?>