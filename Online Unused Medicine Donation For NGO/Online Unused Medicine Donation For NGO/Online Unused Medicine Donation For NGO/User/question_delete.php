<?php
include "include/config.php";

          $delete1 = mysqli_query($connect,"delete from tbl_user_quetion where tbl_user_quetion='".$_GET['a_id']."'")or die(mysqli_error($connect));

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Record Deleted');";
            echo 'window.location.href = "question.php";';
            echo "</script>";

          }
         else
        {
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='question.php';";
				echo "</script>";
			}

             ?>