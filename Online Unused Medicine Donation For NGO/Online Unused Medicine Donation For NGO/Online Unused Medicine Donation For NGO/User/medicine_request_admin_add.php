<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Request to admin</title>            
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
              <?php 


           if(isset($_POST['submit']))
           {

            extract($_POST);
   
            
            $asd="insert into tbl_medicine_request_admin(fld_medicine_request_admin_discription,fld_user_id)
            values('$fld_medicine_request_admin_discription','".$_SESSION['id']."')";

            $add=mysqli_query($connect, $asd) or die(mysqli_error($connect));

            if($add)
            {
                echo "<script>";
                echo "alert('Your Request send to admin');";
                echo "window.location.href='medicine_request_admin.php';";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error');";
                echo "window.location.href='medicine_request_admin.php';";
                echo "</script>";
            }
            
        }
        
        ?>  
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <?php include 'include/header.php'; ?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                     <li><a href="dashboard.php">dashboard</a></li>
                   <li class="active">Medicine Request</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            
                            <form class="form-horizontal" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="btn-group pull-right">
                                 <a style="background-color: #1caf9a;color: white" href="medicine_request_admin.php"class="btn" >View</a>

                                 
                            </div>  
                                    <h3 class="panel-title"><strong>Send your Medicine Requesdt to admin</strong></h3>
                                    <ul class="panel-controls">
                                    
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                      
        
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input   class="form-control" name="" value="<?php echo $fetch_user['fld_user_name'] ;?>" readonly="" style="color: #555;">                                        
                                            
                                        </div>
                                    </div>                
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Request</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="fld_medicine_request_admin_discription" rows="5"></textarea>
                                           
                                        </div>
                                    </div>
                                     </div>
                              <div class="panel-footer">
                                     <div class="form-group">
                                    <div class="col-md-offset-3 col-md-6 col-xs-12">

                                   <button class="btn btn-default pull-right">Clear</button>                                    
                                   <div style="text-align: center;"> <button style="background-color: #1caf9a;color: white"  type="submit" name="submit" class="btn">Submit</button></div>
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
       <?php include 'include/footer.php'; ?>