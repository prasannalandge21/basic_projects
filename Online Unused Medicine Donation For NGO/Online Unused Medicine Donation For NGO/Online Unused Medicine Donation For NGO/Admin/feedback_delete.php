<?php
include "include/config.php";

          $delete1 = mysqli_query($connect,"delete from tbl_feedback where fld_feedback_id='".$_GET['a_id']."'")or die(mysqli_error($connect));

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Record Deleted');";
            echo 'window.location.href = "Feedback.php";';
            echo "</script>";

          }
         else
        {
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='Feedback.php';";
				echo "</script>";
			}

             ?>