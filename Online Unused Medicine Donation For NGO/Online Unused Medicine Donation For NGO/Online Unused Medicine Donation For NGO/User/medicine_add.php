<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Add Medicine</title>            
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
            
        <?php include "include/config.php"; 


           if(isset($_POST['submit']))
           {

            extract($_POST);

            $name=$_FILES['fld_medicine_img']['name'];
          $type=$_FILES['fld_medicine_img']['type'];
          $size=$_FILES['fld_medicine_img']['size'];
          $temp=$_FILES['fld_medicine_img']['tmp_name'];
          if($name){  
                    $upload= "../images/";
                    $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $valid_ext= array('jpg','png','jpeg' );
                    $photo1= rand(1000,1000000).".".$imgExt;
                    move_uploaded_file($temp,$upload.$photo1);

                  //    $save = "$upload" . $photo1; //This is the new file you saving
                  // $file = "$upload" . $photo1; //This is the original file

                  // list($width, $height) = getimagesize($file) ;

                  // $modwidth = 317;
                  // $modheight = 90;
                  // $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  // if($imgExt=="jpg" || $imgExt=="jpeg")
                  //   {
                    
                  //   $image = imagecreatefromjpeg($file);

                  //   }
                  //   else if($imgExt=="png")
                  //   {
                    
                  //   $image = imagecreatefrompng($file);

                  //   }
                  // // $image = imagecreatefromjpeg($file) ;
                  // imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

                  // imagejpeg($tn, $save, 100) ;

          }

            $exp_date=date("Y-m-d", strtotime($fld_medicine_expiry));
           
            
           echo $asd="insert into tbl_medicine(fld_medicine_name,fld_user_id,fld_medicine_quantity,fld_medicine_expiry,fld_medicine_company_name,fld_medicine_descriptiom,fld_medicine_img)
            values('$fld_medicine_name','".$_SESSION['id']."','$fld_medicine_quantity','$exp_date','$fld_medicine_company_name','$fld_medicine_descriptiom','$photo1')";

            $add=mysqli_query($connect, $asd) or die(mysqli_error($connect));

            if($add)
            {
                echo "<script>";
                echo "alert('Record Inserted');";
                echo "window.location.href='medicine_view.php';";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error');";
                echo "window.location.href='medicine_view.php';";
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
                   <li class="active">Add Medicine</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form  role="form" class="form-horizontal" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     <div class="btn-group pull-right">
                                 <a style="background-color: #1caf9a;color: white" href="medicine_view.php"class="btn" >View</a>

                                 
                            </div>  
                                    <h3 class="panel-title"><strong>ADD Medicine</strong></h3>
                                    <ul class="panel-controls">
                                    
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <!-- <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p> -->
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Medicine Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" name="fld_medicine_name" class="form-control"/ required="">                                         
                                            <span class="help-block">Add Proper name</span>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Quantity</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                                <input type="text" name="fld_medicine_quantity" class="form-control"/ required="">
                                                                                      
                                            <span class="help-block">Add total Quantity </span>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Expiry Date</label>
                                        <div class="col-md-6 col-xs-12">
                                                <input type="text" name="fld_medicine_expiry" class="form-control datepicker" required="">                                            
                                           
                                            <span class="help-block">Click on input field to get datepicker</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Company Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                                <input type="text" name="fld_medicine_company_name" class="form-control"/ required="">
                                                                                      
                                            <span class="help-block">Add Proper Company Name </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Discription</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" required="" name="fld_medicine_descriptiom" rows="5"></textarea>
                                            <span class="help-block">fill carefully</span>
                                        </div>
                                    </div>
                                    
                                   
                                    

                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Medicine Image</label>
                                        <div class="col-md-6 col-xs-12"> 
                           <div class="preview_box">
                  
                    <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100" />            
                
                   <input  type="file" class="fileinput btn-danger btn-file" name="fld_medicine_img" id="image" title="Browse file" / required="">
                        <span class="help-block">Select Proper Image<s/span>

                    
                    
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
                                <div class="panel-footer">
                                    <button class="btn btn-default pull-right">Clear</button>                                    
                                   <div style="text-align: center;"> <button style="background-color: #1caf9a;color: white"  type="submit" name="submit" class="btn">Submit</button></div>
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
         <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        login: {
                                required: true,
                                minlength: 2,
                                maxlength: 8
                        },
                        password: {
                                required: true,
                                minlength: 5,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                maxlength: 10,
                                equalTo: "#password2"
                        },
                        age: {
                                required: true,
                                min: 18,
                                max: 100
                        },
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        credit: {
                                required: true,
                                creditcard: true
                        },
                        site: {
                                required: true,
                                url: true
                        }
                    }                                        
                });                                    

        </script>
               
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






