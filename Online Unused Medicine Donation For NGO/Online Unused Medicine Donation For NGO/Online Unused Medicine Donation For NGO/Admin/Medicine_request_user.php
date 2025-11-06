<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Request from user</title>            
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
                    
                    <li class="active">Request from user</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fas fa-thumbs-up"></span> Request from user</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                 <div class="page-content-wrap">
                
                
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             
                        </div>
                          <?php 
                $view=mysqli_query($connect," select u.*, f.* from tbl_user u, tbl_medicine_request_admin f where f.fld_user_id=u.fld_user_id order by f.fld_medicine_request_admin_id desc") or die(mysqli_error($connect));
$total=mysqli_num_rows($view);
echo "<br>";
 ?>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Action</th>
                                                <th>User Name</th>
                                                <th>Requested Medicine</th>
                                               
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
     
        <th scope="row"><?php echo $total++;?></th>
        <th scope="row"><!-- <a href="delete.php?a_id=<?php echo $fetch['user_id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure you wnat to delete')"><i class="fas fa-trash-alt"></i></a> -->

           
                <a href="request_delete.php?a_id=<?php echo $fetch['fld_medicine_request_admin_id']; ?>" onclick="return confirm('Are you sure you want to delete')"><i style="color: red" class="fas fa-trash-alt fa-2x"></i></a>
            
            </th>
        <th scope="row"><?php echo $fld_user_name;?></th>
        <th scope="row"><?php echo $fld_medicine_request_admin_discription;?></th>
       
    </tr>
                                        </tbody>
                                    <?php } ?>
                                    </table> 
                                    </div>                                   
                                    
                                </div>
                            </div>                        
                                    
                                </div>

      </div>         
      <!-- END PAGE CONTENT WRAPPER -->
  </div>            
  <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->    

<?php include 'include/footer.php'; ?>
