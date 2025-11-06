<!DOCTYPE html>
<html lang="en">
<head>        
    <!-- META SECTION -->
    <title>Request medicine</title>            
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
                <li><a href="Dashboard.php">Dashboard</a></li>
                
                <li class="active">Send Request</li>
            </ul>
            <!-- END BREADCRUMB -->
            
            <!-- PAGE TITLE -->
            <div class="page-title">                    
                <h2><span class="fa fa-share-square"></span> Send Request for medicine</h2>
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
                        $view=mysqli_query($connect,"select * from tbl_medicine where fld_user_id!='".$_SESSION['id']."'and fld_medicine_status='approved' order by fld_medicine_id  desc ") or die(mysqli_error($connect));
                        $total=mysqli_num_rows($view);
                        echo "<br>";
                        ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table id="customers2" class="table datatable">
                                <thead>
                                    <tr>
                                        <th>SR no</th>
                                        <th>Action</th>
                                        <th>Medicine Name</th>
                                        <th>Quantity</th>
                                        <th>Expiry Date</th>
                                        <th>Company Name</th>
                                        <th>Discription</th>
                                        <th>Medicine Image</th>
                                        <th>Send Request</th>
                                        
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
<th scope="row"> 
 
<!-- Button trigger modal -->

<a href="" name="update" data-toggle="modal" data-target="#myModal<?php echo $fetch['fld_medicine_id'] ?>" >  <i class="fas fa-eye fa-2x"></i></a>


<!-- The Modal -->
<div class="modal modal-xl" id="myModal<?php echo $fetch['fld_medicine_id'] ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><b>Student table details</b></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

                <div class="modal-body">
                    <div class="panel panel-default">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"> 
                                   <?php 
              if($fetch['fld_medicine_img']=="")
              {
          ?>
          <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
          <?php }
              else
              {
           ?>
              <img src="../images/<?php echo $fetch['fld_medicine_img'];?>" height="300" width="300">

              <?php } ?>
                                </div>
                                <div class="col-md-6"> 
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                        </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <input class="btn btn-success" value="update" type="submit" name="update"> 
                                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div> 
                                            </th>
                                          <th scope="row"><?php echo $fld_medicine_name ;?></th>
                                          <th scope="row"><?php echo $fld_medicine_quantity;?></th>
                                          <th scope="row"><?php echo $fld_medicine_expiry;?></th>
                                          <th scope="row"><?php echo $fld_medicine_company_name;?></th>
                                          <th scope="row"><?php echo $fld_medicine_descriptiom;?></th>
                                          <th scope="row"><?php 
              if($fetch['fld_medicine_img']=="")
              {
          ?>
          <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
          <?php }
              else
              {
           ?>
              <img src="../images/<?php echo $fetch['fld_medicine_img'];?>" height="100" width="100">

              <?php } ?></th>
                                          <th scope="row"> <a href="medicine_send_request.php?a_id=<?php echo $fetch['fld_medicine_id'];?>" ><i style="color: green;size: 30px;" class="fa fa-share fa-2x"></i></a></th>
                                      </tr>
                              <?php } ?>
                                  </tbody>
                          </table>                                    
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

<?php include 'include/footer.php'; ?>
