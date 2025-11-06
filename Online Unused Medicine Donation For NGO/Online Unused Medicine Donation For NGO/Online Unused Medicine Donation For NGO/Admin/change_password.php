<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>admin Change Password</title>            
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
                    <li><a href="#">Home</a></li>
                    
                    <li class="active">Change password</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Change password admin</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                    <div class="btn-group pull-right">
                                       
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='img/icons/json.png' width="24"/> JSON</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='img/icons/xml.png' width="24"/> XML</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='img/icons/sql.png' width="24"/> SQL</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                    
                                </div>

  <?php 
                $view=mysqli_query($connect,"select * from tbl_admin order by fld_admin_id desc ") or die(mysqli_error($connect));
$total=mysqli_num_rows($view);
echo "<br>";
 ?>
                                <div class="panel-body">
                              <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     <h3 class="panel-title"><strong>Change </strong>Password</h3>
                                </div>
                                <div class="panel-body">
                        <form method="post" id="myform" enctype="multipart/form-data">
                            <br>
                            <label>Old Password</label>
                            <input type="Password" name="old_password" placeholder="Enter Old Password" class="validate[required] text-input form-control" /><br>

                            <label>New Password</label>
                            <input type="Password" name="new_password" placeholder="Enter New Password" class=" validate[required] text-input form-control" /><br>

                            <label>Confirm Password</label>
                            <input type="Password" name="con_password" placeholder="Confirm Password" class=" validate[required] text-input form-control" /><br>

                            <input type="submit" class="btn" name="submit" value="Submit" style="background-color:#fc2135; color: #FFF; " />
                        </form>
                                </div>
                            </div>

                        </div>
                    </div>
                
                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                           

                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
 <?php
if(isset($_POST['submit']))
{
   
     $query = 'select * from tbl_admin where  fld_admin_password="'.$_POST['old_password'].'" and fld_admin_email ="'.$_SESSION['fld_admin_email'].'" ';

    $res=mysqli_query($connect,$query);

    if(mysqli_num_rows($res)>0)
    {

        if(strlen($_POST['new_password']) >= 5 )
            {
                if($_POST['new_password']==$_POST['con_password'])
                {
                    $query1='update tbl_admin set fld_admin_password="'.$_POST['new_password'].'" where fld_admin_email ="'.$_SESSION['fld_admin_email'].'" ';   
                    $res=mysqli_query($connect,$query1);

                      echo '<script type="text/javascript">';
                      echo 'alert("Password changed Successfully !!!! ");';
                      echo 'window.location.href = "index.php";';
                      echo '</script>';
                }
                else
                {
                    echo '<script type="text/javascript">';
                    echo 'alert(" password is not matched...  try again !!!! ");';
                    echo 'window.location.href = "change.php";';
                    echo '</script>';
                }
            }
            else
            {
                echo '<script type="text/javascript">';
                echo 'alert("password length not match");';
                echo 'window.location.href = "reset-password.php";';
                echo '</script>';
            }
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'alert("Old password is not matched...  try again");';
        // $query1;
        //echo 'window.location.href = "change_password.php";';
        echo '</script>';
               

    }
}
?>

       <?php include 'include/footer.php'; ?>

      