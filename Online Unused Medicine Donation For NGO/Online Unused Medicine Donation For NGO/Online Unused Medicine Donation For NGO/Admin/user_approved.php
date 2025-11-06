<?php 
include "include/config.php";



	$fghjg=mysqli_query($connect,"Update  tbl_user set fld_user_status='approved' where fld_user_id='".$_GET['a_id']."'") or die(mysqli_error($connect));


	if($fghjg)
		{
				echo "<script>";
				echo "alert('approved By admin');";
				echo "window.location.href='approved.php'";
				// echo "window.location.href='view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='approved.php';";
				echo "</script>";
			}
?>