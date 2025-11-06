
<?php
session_start();
?>
<?php 
include "include/config.php";

	
$fghjg=mysqli_query($connect,"Update tbl_medicine set fld_medicine_request='requested to admin For approvel' ,fld_medicine_req='requested',fld_medicine_ac_can='".$_SESSION['id']."' where fld_medicine_id='".$_GET['a_id']."'") or die(mysqli_error($connect));



            $asd="insert into tbl_medicine_request(fld_user_med_from,fld_user_med_to,fld_medicine_id)
            values('".$_SESSION['id']."','".$_GET['id']."','".$_GET['a_id']."')";

   $add=mysqli_query($connect, $asd) or die(mysqli_error($connect));


if($add)
		{
				echo "<script>";
				echo "alert('Your Request send successfully');";
				echo "window.location.href='Medicine_request.php'";
				// echo "window.location.href='view.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='Medicine_request.php;";
				echo "</script>";
			}
?>