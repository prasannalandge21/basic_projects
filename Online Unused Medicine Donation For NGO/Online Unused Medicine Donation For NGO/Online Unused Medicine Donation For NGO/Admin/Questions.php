<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Question And Answer</title>            
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
                    
                    <li class="active"> Question And Answer</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-question"></span> Question And Answer User</h2>
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
                $view=mysqli_query($connect,"select u.*, q.* from tbl_user u, tbl_user_quetion q where q.fld_user_id=u.fld_user_id  order by q.fld_user_quetion_id desc") or die(mysqli_error($connect));
$total=mysqli_num_rows($view);
echo "<br>";
 ?>


                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Action</th>
                                                <th>Name</th>
                                                <th>Quetions</th>
                                                <th>Answer</th>
                                                <th>Submited Date</th>
                                                <th>Updated date</th>
                                                
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

        
                <a style="color: red;"  href="question_delete.php?a_id=<?php echo $fetch['fld_user_quetion_id']; ?>" onclick="return confirm('Are you sure you want to delete')"><i class="fas fa-trash-alt fa-2x"></i></a> &nbsp;&nbsp;
      <!--           <a style="color: blue;"  href="question_delete.php?a_id=<?php echo $fetch['fld_user_quetion_id']; ?>" ><i class="fa fa-marker fa-2x"></i></a> -->

<a href="" name="update" data-toggle="modal" data-target="#myModal<?php echo $fetch['fld_user_quetion_id'] ?>" >  <i style="color: green" class="fa fa-edit fa-2x"></i></a>




</th>
        <th scope="row"><?php echo $fld_user_name;?></th>
        <th scope="row"><?php echo $fld_user_quetions;?></th>
        <th scope="row"><?php echo $fld_user_answer;?></th>
        <th scope="row"><?php echo $fld_user_quetion_submited_date;?></th>
        <th scope="row"><?php echo $fld_user_quetion_updated_date;?></th>
        
    </tr>


<!-- The Modal -->
<div class="modal modal-xl" id="myModal<?php echo $fetch['fld_user_quetion_id'] ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><b>User Question</b></h4>
                
            </div>
            <form method="post" action="question_answer.php?fld_user_quetion_id=<?php echo $fetch['fld_user_quetion_id'] ?>">
                <div class="modal-body">
                        <div class="container">
                            <div class="row">
                               
                                <div class="col-md-1"></div>
                                <div class="col-md-6"> <h3> <b>Question ::</b> <?php echo $fld_user_quetions ;?></h3></div>
                                <div class="col-md-4"> </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-6"> <textarea class="form-control" name="fld_user_answer" placeholder="Enter Answer" rows="10"></textarea></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                   

            </div>
             
            <!-- Modal footer -->
            <div class="modal-footer">
              <input class="btn btn-primary" value="update" type="submit" name="update"> 
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </form>
                                                      </div>
                                                  </div>
                                              </div> 
                                        
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
       