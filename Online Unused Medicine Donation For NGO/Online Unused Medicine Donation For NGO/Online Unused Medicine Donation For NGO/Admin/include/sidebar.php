 <?php
session_start();

if(!isset($_SESSION['id']))
{
    echo "<script>";
    echo 'window.location.href="index.php";';
    echo "</script>";
}

include 'include/config.php';

$view_user=mysqli_query($connect,"select * from tbl_admin where fld_admin_id='".$_SESSION['id']."' order by fld_admin_id desc ") or die(mysqli_error($connect));
$total_user=mysqli_num_rows($view_user);
$fetch_user=mysqli_fetch_array($view_user);
?>

<div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="dashboard.php">ADMIN</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <div class="profile-image">
                               <?php 
              if($fetch_user['fld_admin_image']=="")
              {
          ?>
          <img id="preview_imgs" src="../images/No-image-full.jpg" height="100" width="100"/>
          <?php }
              else
              {
           ?>
              <img id="preview_imgs" src="../images/<?php echo $fetch_user['fld_admin_image']?>" height="100" width="100" />

              <?php } ?>
                            </div>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $fetch_user['fld_admin_name'] ;?></div>
                                <div class="profile-data-title"><?php echo $fetch_user['fld_admin_email'] ;?></div>
                            </div>
                           
                        </div>                                                                        
                    </li>


                    <li class="xn-title">Navigation</li>
                    <li >
                        <a href="dashboard.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                        <ul>
                            <li><a href="user_Register.php"><span class="fa fa-list"></span>Register User</a></li>
                            <li><a href="approved.php"><span class="fa fa-thumbs-up"></span>Approved User</a></li>
                             <li><a href="Disapprove.php"><span class="fa fa-thumbs-down"></span> Disapprove User</a></li>
                                                    
                        </ul>
                    </li>


                                       
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-capsules"></span> <span class="xn-text">View Medicine</span></a>
                        <ul>
                            <li><a href="Medicine_Register.php"><span class="fa fa-list"></span>Register Medicine</a></li>
                            <li><a href="Medicine_approve.php"><span class="fa fa-thumbs-up"></span>Approved Medicine</a></li>
                             <li><a href="Medicine_disapprove.php"><span class="fa fa-thumbs-down"></span>Disapprove Medicine</a></li>
                                                        
                        </ul>
                    </li>

                    <li>
                        <a href="medicine_user_request.php"><span class="fa fa-mail-forward"></span> <span class="xn-text">all Request View from user</span></a>
                    </li> 
                    <li>
                        <a href="User_request1.php"><span class="fa fa-eye"></span> <span class="xn-text">Request View</span></a>
                    </li>

                    <li>
                        <a href="Medicine_request_user.php"><span class="fa fa-share-square"></span> <span class="xn-text">Request From User</span></a>
                    </li>
 <li>
                        <a href="Feedback.php"><span class="fa fa-comments"></span> <span class="xn-text">Feedback</span></a>
                    </li>

<li>
                        <a href="Questions.php"><span class="fa fa-question-circle"></span> <span class="xn-text">Answer of Questions</span></a>
                    </li>


<li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Setting</span></a>
                        <ul>
                            <li><a href="profile.php"><span class="fa fa-pen-square"></span>Update Profile</a></li>                           
                            <li><a href="change_password.php"><span class="fa fa-unlock-alt"></span>Change Password</a></li>
                        </ul>
                    </li>



 <li class="xn-icon-button pull-right">
                        <a href="" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out-alt"></span>Log_out</a>                        
                    </li>



                   
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            