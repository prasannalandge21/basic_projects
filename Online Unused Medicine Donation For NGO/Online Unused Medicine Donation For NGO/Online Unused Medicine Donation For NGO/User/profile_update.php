<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Update Profile</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->   
        <style type="text/css">
            .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
        .preview_box img{max-width: 100px; max-height: 100px;
        </style> 
                      
    </head>
    <body>


  

        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <?php include 'include/sidebar.php'; ?>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <?php include 'include/header.php'; ?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard.php">dashboard</a></li>
                   <li class="active">Profile Update</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            
                            <form class="form-horizontal" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Profile Update</strong></h3>
                                    <ul class="panel-controls">
                                    
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                      
        
                                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fld_user_name" class="form-control" placeholder="Name" value="<?php echo $fetch_user['fld_user_name'] ;?>" />
                             <span class="help-block">User Name</span>
                        </div>
                    </div><div class="form-group">
                        <div class="col-md-12">
                            <input style="color: #555;" type="text" name="fld_user_email" class="form-control" placeholder="E-mail" value="<?php echo $fetch_user['fld_user_email'] ;?> " readonly="" />
                            <span class="help-block">User Email</span>
                        </div>
                    </div>

                     <div class="preview_box">
          <?php 
              if($fetch_user['fld_user_photo']=="")
              {
          ?>
          <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
          <?php }
              else
              {
           ?>
              <img id="preview_img" src="../images/<?php echo $fetch_user['fld_user_photo']?>" height="100" width="100" />

              <?php } ?>
            
          <input type="file" id="image" name="fld_user_photo"  accept=" .jpg, .jpg, .jpeg " />

           
        </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fld_user_mobileno" class="form-control" placeholder="Mobile No" value="<?php echo $fetch_user['fld_user_mobileno'] ;?>"/>
                            <span class="help-block">User Mobile No</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                           
                              <textarea name="fld_user_address" class="form-control" rows="5"><?php echo $fetch_user['fld_user_address']  ;?> </textarea>
                              <span class="help-block">User Address</span>
                        </div>
                    </div>
                    
                   <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="fld_user_city" class="form-control" placeholder="City" value="<?php echo $fetch_user['fld_user_city'] ;?>"/>
                              <span class="help-block">User city</span>
                        </div>
                    </div>
                   
                         <div class="form-group">
                       
                      
                     
                    </div>
                   
                   
                
                                     </div>
                              <div class="panel-footer">
                                     <div class="form-group">
                                    <div class="col-md-offset-3 col-md-6 col-xs-12">

                                   <button  type="submit" name="update" class="btn btn-primary">Update</button>


                                   <button class="btn btn-warning">Clear</button>
                               </div>
                               </div>
                                </div>



                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
         











 <?php 

    if(isset($_POST['update']))
    {

        extract($_POST);
        
$name=$_FILES['fld_user_photo']['name'];
  $type=$_FILES['fld_user_photo']['type'];
  $size=$_FILES['fld_user_photo']['size'];
  $temp=$_FILES['fld_user_photo']['tmp_name'];
  if($name){
  
            $upload= "../images/";
            $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','jpg','jpeg' );
            $photo= rand(1000,1000000).".".$imgExt;
            unlink($upload.$fetch_user['fld_user_photo']);
            move_uploaded_file($temp,$upload.$photo);
            
           
  }
  else
  {

    $photo=$fetch_user['fld_user_photo'];
  }
$update=mysqli_query($connect,"update tbl_user set 
  fld_user_photo='".$photo."' ;
 

  where fld_user_id ='".$_SESSION['id']."'");
 $adsf="update tbl_user set 
           fld_user_name='".$fld_user_name."',
            fld_user_email='".$fld_user_email."',
            fld_user_mobileno='".$fld_user_mobileno."',
            fld_user_address='".$fld_user_address."',
            fld_user_photo='".$photo."',
            fld_user_city='".$fld_user_city ."'
            where fld_user_id='".$_SESSION['id']."'";         

            $update=mysqli_query($connect, $adsf) or die(mysqli_error($connect));

           
            if($update)
            {
                echo "<script>";
                echo "alert('Record Updated');";
                echo "window.location.href='profile.php';";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error');";
                echo "window.location.href='profile.php'";
                echo "</script>";
            }
        //}
    }

?>


         
       <?php include 'include/footer.php'; ?> 
       <script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image").change(function(){
                    readImageData(this);//Call image read and render function
                });
            });
             
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>

