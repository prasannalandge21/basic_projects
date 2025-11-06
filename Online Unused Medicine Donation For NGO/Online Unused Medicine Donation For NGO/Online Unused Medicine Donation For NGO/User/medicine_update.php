
 <?php  
include 'include/config.php';
 if(isset($_POST['update']))
           {

            extract($_POST);
   
            
            $asd="update tbl_user_quetion set fld_user_answer='$fld_user_answer' where fld_user_quetion_id='".$_GET['fld_user_quetion_id']."'";

            $add=mysqli_query($connect, $asd) or die(mysqli_error($connect));

            if($add)
            {
                echo "<script>";
                echo "alert('Questions Add');";
                echo "window.location.href='Questions.php';";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error');";
                echo "window.location.href='Questions.php';";
                echo "</script>";
            }
            
        }
        
        ?>  