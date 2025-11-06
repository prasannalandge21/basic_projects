
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
<?php include 'include/config.php' ?>
    <head>   <script type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>      
        <!-- META SECTION -->
        <title>Kumar</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE --> 
                                           
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div><h1 style="color: white; text-align: center; font-family:  'Open Sans', sans-serif;line-height: 1.2";>     Online Unused Medicine Donation For NGO</h1></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                             <input type="text" class="form-control" name="user_email" placeholder="Username"/>
                            <div class="input-group-addon"><i  class="fa fa-user" aria-hidden="true" style="padding-bottom: 13px"></i></div>
                          </div>

                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <input type="password" class="form-control" name="user_password" placeholder="Password" id="password" />
                            <div class="input-group-addon"><i toggle="#password" class="fa fa-fw fa-eye-slash toggle-password" aria-hidden="true" style="padding-bottom: 13px"></i></div>
                          </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="New_registration.php" class="btn btn-link btn-block">New ? create account here</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" name="login" type="submit">Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
                
            </div>
            
        </div>
        
    </body>
</html>
<?php
        if(isset($_POST['login']))
    {
        extract($_POST);

$user_email=mysqli_real_escape_string($connect,$_POST['user_email']);
$user_password=mysqli_real_escape_string($connect,$_POST['user_password']);

     
$abc="select * from tbl_user where fld_user_email='$user_email' and fld_user_password='$user_password'";

        $log=mysqli_query($connect,$abc) or die (mysqli_error($connect));
            
        if(mysqli_num_rows($log)>0)
        {
            $fetch=mysqli_fetch_array($log);
        if ($fetch['fld_user_status']=="approved") {
                # code...


            $_SESSION['id']=$fetch['fld_user_id'];
            $_SESSION['user_email']=$fetch['fld_user_email'];            

            echo "<script>";
            echo "alert('Login Successfull');";
            echo 'window.location.href="dashboard.php";';
            echo "</script>";
        }else if($fetch['fld_user_status']=="register")
        {
            echo "<script>";
            echo "alert('Pending');";
            echo 'window.location.href="index.php";';
            echo "</script>";

        }
        else{

            echo "<script>";
            echo "alert('Dispproved');";
            echo 'window.location.href="index.php";';
            echo "</script>";
        }

    }

    ?>
    <?php } ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(".toggle-password").click(function() {

      $(this).toggleClass("fa-eye-slash fa-eye");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
  </script>



