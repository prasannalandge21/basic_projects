<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Question and Answer</title>            
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
                    
                    <li class="active">Questions and Answers</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-question"></span> Questions and Answers</h2>
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
                                       
                                        
                                    </div>                                    
                                    <?php 
                $view=mysqli_query($connect,"select * from tbl_user_quetion where fld_user_id='".$_SESSION['id']."'  order by fld_user_quetion_id desc ") or die(mysqli_error($connect));
$total=mysqli_num_rows($view);
echo "<br>";
 ?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                        <div class="col-md-7">
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">Your Questions</h3>
                                </div>
                                <?php 
        $count=1;
        while($fetch=mysqli_fetch_array($view))
        {
            extract($fetch);
            ?>
                                <div class="panel-body faq">
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span><?php echo $fld_user_quetions;?>?  </div>
                                        <div class="faq-text">
                                           <p><?php echo $fld_user_answer;?> </p>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                            <?php } ?>
                            </div>
                                  
                            
                        </div>                        
                        <div class="col-md-5">
                            
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                     <div class="page-title">                    
                    <h2><span class="fa fa-questiont"></span>Did Not find Question</h2>

                </div>

                
                <div class="form-group">
                            <h4>Type Your Question:</h4>
                            <form method="post">
                            <textarea name="fld_user_quetions" required="" class="form-control push-down-10" id="new_task" rows="4" placeholder="Type Your question here..."></textarea> 

                            <div style="text-align: center;">                    
                            <button style="background-color: #1caf9a;color: white" class="btn " type="submit" name="submit" id="add_new_task"><span class="fa fa-edit"></span>Add</button></div>       


                            </form>
                        </div> <p>Note: Your Quetions will Forward to Admin for Answer, </p>
                                                                          
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="panel panel-primary">
                                
                            <!-- END DATATABLE EXPORT -->  
                                                      
                            

                        </div>
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

            extract($_POST);
   
            
            $asd="insert into tbl_user_quetion(fld_user_quetions,fld_user_id,fld_user_answer )
            values('$fld_user_quetions','".$_SESSION['id']."','NO Answer.....')";

            $add=mysqli_query($connect, $asd) or die(mysqli_error($connect));

            if($asd)
            {
                echo "<script>";
                echo "alert('Thank You for Your Question.  Wait for admin's Answer);";
                echo "window.location.href='Question.php';";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error');";
                echo "window.location.href='Question.php';";
                echo "</script>";
            }
            
        }
        
        ?>  

       <?php include 'include/footer.php'; ?>
            <script type="text/javascript" src="js/faq.js"></script>
       