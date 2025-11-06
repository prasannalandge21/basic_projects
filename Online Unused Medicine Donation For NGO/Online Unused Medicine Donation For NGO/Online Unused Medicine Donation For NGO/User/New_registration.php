
<!DOCTYPE html>
<html lang="en" class="body-full-height">
<?php include 'include/config.php' ?>
    <head>  
    </script>      
        <!-- META SECTION -->
        <title>User</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE --> 
                                      
    </head>
    <body>
        

       <?php 
        if(isset($_POST['submit']))
           {

            extract($_POST);
           
     $asd="insert into tbl_user(fld_user_name,fld_user_email,fld_user_password,fld_user_mobileno,fld_user_address,fld_user_city)values('$fld_user_name','$fld_user_email','$fld_user_password','$fld_user_mobileno','$fld_user_address','$fld_user_city')";

            $add=mysqli_query($connect, $asd) or die(mysqli_error($connect));

            if($add)
            {
                echo "<script>";
                echo "alert('Record Inserted');";
                echo "window.location.href='index.php';";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error');";
                echo "window.location.href='index.php';";
                echo "</script>";
            }
            
        }
        
 ?>



        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Register</strong></div>
                    <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fld_user_name" class="form-control" placeholder="Name"/>
                        </div>
                    </div><div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fld_user_email" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="fld_user_password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fld_user_mobileno" class="form-control" placeholder="Mobile No"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fld_user_address" class="form-control" placeholder="Address"/>
                        </div>
                    </div>
                    
                   <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fld_user_city" class="form-control" placeholder="City"/>
                        </div>
                    </div>
                   
                         <div class="form-group">
                       
                        <div class="col-md-6">
                          
                             <button class="btn btn-info btn-block" type="submit" name="submit" value="login" >Submit</button>
                     </div>
                       <div class="col-md-6">
                          
                            <a href="index.php"><button class="btn btn-info btn-block" type="submit"  value="login" >Login</button></a>
                     </div>
                     
                    </div>
                   
                   
                    </form>
                </div>
                
            </div>
            
        </div>

        
    </body>
</html>




