<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Disapprove user</title>            
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
                    <li><a href="dashboard.php">dashboard</a></li>
                    
                    <li class="active">Disapprove</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-thumbs-down"></span> Disapprove User</h2>
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
                $view=mysqli_query($connect,"select * from tbl_user where fld_user_status='disapproved' order by fld_user_id desc ") or die(mysqli_error($connect));
$total=mysqli_num_rows($view);
echo "<br>";
 ?>

                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Action</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>MObile No</th>
                                                
                                                <th>Address</th>
                                                <th>Photo</th>
                                                <th>City</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
        $count=1;
        while($fetch=mysqli_fetch_array($view))
        {
            extract($fetch);
            ?>
    <tr>
     
        <th scope="row"><?php echo $count++;?></th>
        <th scope="row"><!-- <a href="delete.php?a_id=<?php echo $fetch['user_id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure you wnat to delete')"><i class="fas fa-trash-alt"></i></a> -->

           
 <a href="user_approved.php?a_id=<?php echo $fetch['fld_user_id'];?>" ><i style="color: green;size: 30px;" class="fas fa-thumbs-up"></i></a></th>
        <th scope="row"><?php echo $fld_user_name ;?></th>
        <th scope="row"><?php echo $fld_user_email;?></th>
 
        <th scope="row"><?php echo $fld_user_mobileno;?></th>
        <th scope="row"><?php echo $fld_user_address;?></th>
        <th scope="row"><?php 
              if($fetch['fld_user_photo']=="")
              {
          ?>
          <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
          <?php }
              else
              {
           ?>
              <img src="../images/<?php echo $fetch['fld_user_photo'];?>" height="100" width="100">

              <?php } ?></th>
        <th scope="row"><?php echo $fld_user_city;?></th>
    </tr>
                                    <?php } ?>
                                        </tbody>
                                    </table>                                    
                                    
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

       <?php include 'include/footer.php'; ?>
       