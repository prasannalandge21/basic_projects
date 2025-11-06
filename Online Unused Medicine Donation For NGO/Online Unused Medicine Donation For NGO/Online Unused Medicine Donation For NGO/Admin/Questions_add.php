   <?php 
include 'include/config.php';
    if(isset($_POST['update']))
    {

        extract($_POST);
        $adsf="update tbl_user_quetion set 
            fld_user_answer ='".$fld_user_answer."'
            where fld_user_quetion_id ='".$_GET['a_id']."'";          

            $update=mysqli_query($connect, $adsf) or die(mysqli_error($connect));

          
            if($update)
            {
                echo "<script>";
                echo "alert('Record Updated');";
                echo "window.location.href='Questions.php';";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error');";
                echo "window.location.href='Questions.php'";
                echo "</script>";
            }
        //}
    }

?>