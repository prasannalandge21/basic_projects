<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Update Medicine</title>            
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
        .preview_box img{max-width: 300px; max-height: 300px;
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
                   <li> <a href="medicine_view.php">View Medicine</a></li>
                   <li class="active">update Medicine</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Medicine Information</strong></h3>
                                    <ul class="panel-controls">
                                    
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <!-- <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p> -->
                                </div>
                                  <?php 
                        $view=mysqli_query($connect,"select * from tbl_medicine where fld_medicine_id='".$_GET['fld_medicine_id']."' order by fld_medicine_id  desc ") or die(mysqli_error($connect));
                        $total=mysqli_num_rows($view);
                        echo "<br>";
                        ?>
                                <div class="panel-body">           <?php 
                                    $count=1;
                               $fetch=mysqli_fetch_array($view);
                                    
                                        extract($fetch);
                                        ?>    

                                        
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">    <div class="form-group">
                                       <!--  <label class="col-md-3 col-xs-12 control-label">Medicine Image</label> -->
                                        <div class="col-md-6 col-xs-12"> 


   <div class="preview_box">
          <?php 
              if($fetch['fld_medicine_img']=="")
              {
          ?>
          <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
          <?php }
              else
              {
           ?>

<div class="img_responsive">
              <img id="preview_img" src="../images/<?php echo $fetch['fld_medicine_img']?>" height="200%" width="auto"  accept=" .jpg, .jpg, .jpeg " /></div>

              <?php } ?>
            <br>
            <br>

        <center> <label class="col-md-10 col-xs-12 control-label">Medicine image</label></center>
<span class="help-block"></span>
        </div>
                                    




                  

                    <script>
                            function fileValidation() {
                                var fileInput =
                                    document.getElementById('image');

                                var filePath = fileInput.value;

                                // Allowing file type 
                                var allowedExtensions =
                                    /(\.jpg|\.jpeg|\.png)$/i;

                                if (!allowedExtensions.exec(filePath)) {
                                    alert('Invalid Image type');
                                    fileInput.value = '';
                                    return false;
                                }

                            }

                        </script>                                                                                                     
                                           
                                        </div>
                                    </div>
</div>
                                        <div class="col-md-7"><div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Medicine Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" name="fld_medicine_name" class="form-control" value="<?php echo $fld_medicine_name ?>" readonly="" style="color: #555;" />                                         
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Quantity</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                                <input type="text" name="fld_medicine_quantity" class="form-control"  value=" <?php echo $fld_medicine_quantity ?> " readonly="" style="color: #555;" />
                                                                                      
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Expiry Date</label>
                                        <div class="col-md-6 col-xs-12">
                                                <input type="text" name="fld_medicine_expiry" class="form-control datepicker" placeholder="ADD Expiry Date" value="<?php echo $fld_medicine_expiry ?>" readonly="" style="color: #555;" >                                            
                                           
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Company Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                                <input type="text" name="fld_medicine_company_name" class="form-control" value=" <?php echo $fld_medicine_company_name ?> "  readonly="" style="color: #555;" />
                                                                                      
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Discription</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="fld_medicine_descriptiom" readonly="" style="color: #555;"  rows="5"><?php echo $fld_medicine_descriptiom; ?></textarea>
                                            <span class="help-block"></span>
                                        </div>
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
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
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
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->  

 
                 
    </body>
</html>









