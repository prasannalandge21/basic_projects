<?php
include "include/config.php";
$sel=mysqli_query($connect,"select * from tbl_medicine where fld_medicine_id='".$_GET['a_id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
                   $img=$fetch["fld_medicine_img"];
         }

          $isrc="../images/".$img;
          unlink($isrc);

          $delete1 = mysqli_query($connect,"delete from tbl_medicine where fld_medicine_id='".$_GET['a_id']."'")or die(mysqli_error($connect));

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Record Deleted');";
            echo 'window.location.href = "medicine_view.php";';
            echo "</script>";

          }
         else
        {
				echo "<script>";
				echo "alert('Error');";
				echo "window.location.href='medicine_view.php';";
				echo "</script>";
			}

             ?>