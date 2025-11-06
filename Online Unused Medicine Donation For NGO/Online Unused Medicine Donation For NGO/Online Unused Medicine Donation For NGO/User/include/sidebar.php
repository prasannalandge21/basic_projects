<?php
session_start();

if(!isset($_SESSION['id']))
{
    echo "<script>";
    echo 'window.location.href="index.php";';
    echo "</script>";
}

include 'include/config.php';

$view_user=mysqli_query($connect,"select * from tbl_user where fld_user_id='".$_SESSION['id']."' order by fld_user_id desc ") or die(mysqli_error($connect));
$total_user=mysqli_num_rows($view_user);
$fetch_user=mysqli_fetch_array($view_user);
?>
<div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="dashboard.php">user</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                               <?php 
              if($fetch_user['fld_user_photo']=="")
              {
          ?>
          <img id="preview_imgs" src="../images/No-image-full.jpg" height="100" width="100"/>
          <?php }
              else
              {
           ?>
              <img id="preview_imgs" src="../images/<?php echo $fetch_user['fld_user_photo']?>" height="100" width="100" />

              <?php } ?>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $fetch_user['fld_user_name'] ;?></div>
                                <div class="profile-data-title"><?php echo $fetch_user['fld_user_email'] ;?></div>
                            </div>
                           
                        </div>                                                                        
                    </li>


                    <li class="xn-title">Navigation</li>
                    <li >
                        <a href="dashboard.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>
                     <li>
                        <a href="medicine_view.php"><span class="fa fa-tablets"></span> <span class="xn-text">Donat Medicine</span></a>                        
                    </li>  

                     <li>
                        <a href="Feedback_view.php"><span class="fa fa-comment-alt"></span> <span class="xn-text">Feedback</span></a>                        
                    </li>  

                     <li>
                        <a href="Question.php"><span class="fa fa-question"></span> <span class="xn-text">Questions</span></a>                        
                    </li>
                      <li>
                        <a href="medicine_all_request.php"><span class="fa fa-share"></span> <span class="xn-text">Requests form other user</span></a>                        
                    </li>  
                     <li>
                        <a href="medicine_request.php"><span class="fa fa-share-square"></span> <span class="xn-text">Send Request to other user for medicine</span></a>                        
                    </li> 
                     <li>
                        <a href="medicine_requested_to_user.php"><span class="fa fa-border-all"></span> <span class="xn-text">All request Status </span></a>                        
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-tasks"></span> <span class="xn-text">Your Medicine Status</span></a>
                        <ul>
                            <li><a href="request_accepted.php"><span class="fa fa-check"></span>Accepted Request</a></li>                           
                            <li><a href="request_rejected.php"><span class="fa fa-times"></span>Rejected request</a></li>
                            <li><a href="sold_out.php"><span class="fa fa-times-circle"></span>Sold Out</a></li>
                        </ul>
                    </li>
 
                     
                    <li>
                        <a href="medicine_request_admin.php"><span class="fa fa-share-square"></span> <span class="xn-text">Send Request to admin</span></a>                        
                    </li>  

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Setting</span></a>
                        <ul>
                            <li><a href="profile.php"><span class="fa fa-pen-square"></span>User Profile</a></li>                           
                            <li><a href="change_password.php"><span class="fa fa-unlock-alt"></span>Change Password</a></li>
                        </ul>
                    </li>

 <li class="xn-icon-button pull-right">
                        <a href="" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out-alt"></span>Log_out</a>                        
                    </li>
                    


            
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            
            