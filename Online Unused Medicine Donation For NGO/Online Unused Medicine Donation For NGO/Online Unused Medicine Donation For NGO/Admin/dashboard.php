<!DOCTYPE html>
<html lang="en">
    <head>         <script type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>
        <!-- META SECTION -->
        <title>kumar</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                 <?php $view=mysqli_query($connect,"select * from tbl_user order by fld_user_id desc ") or die(mysqli_error($connect));
$total=mysqli_num_rows($view);
echo "<br>";


?>
                   
                   <?php 
        $count=1;
$fetch=mysqli_fetch_array($view);
       
            extract($fetch);
            ?>          


                      <?php
        $abc1="select (select count(fld_user_id) from tbl_user where fld_user_status='register') as register , (select count(fld_user_id) from tbl_user where fld_user_status='approved') as approved , (select count(fld_user_id) from tbl_user where  fld_user_status='disapproved') as disapproved";
    $query1=mysqli_query($connect,$abc1);
$fetch1=mysqli_fetch_array($query1);
?>

            <?php $view2=mysqli_query($connect,"select * from tbl_medicine order by fld_medicine_id desc ") or die(mysqli_error($connect));
$total2=mysqli_num_rows($view2);
echo "<br>";


?>
  <?php 
        $count=1;
$fetch=mysqli_fetch_array($view);
       
            extract($fetch);
            ?>                 <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

<!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                           
                            <!-- START WIDGET SLIDER -->
                                 <a href="user_Register.php">
                             <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Register User</div>                                                                        
                                        
                                        <div class="widget-int"><?php echo $total; ?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title"> Approved user</div>
                                    
                                        <div class="widget-int"><?php echo $fetch1['approved']; ?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title"> Disapproved User   </div>
                                     
                                        <div class="widget-int"><?php echo $fetch1['disapproved']; ?></div>
                                    </div>
                                </div>                            
                                                           
                            </div> 
                            </a>    
                            <!-- END WIDGET SLIDER -->
                            
                        </div>

                        <div class="col-md-3">
                            
                         
   
                      <?php
        $abc2="select (select count(fld_medicine_id) from tbl_medicine where fld_medicine_status='register') as register , (select count(fld_medicine_id) from tbl_medicine where fld_medicine_status='approved') as approved , (select count(fld_medicine_id) from tbl_medicine where  fld_medicine_status='disapproved') as disapproved , (select count(fld_medicine_id) from tbl_medicine where fld_medicine_request ='Medicine Sold Out') as sold";
    $query2=mysqli_query($connect,$abc2);
$fetch2=mysqli_fetch_array($query2);
?>      
                            <!-- START WIDGET MESSAGES -->
                            <a href="Medicine_Register.php">
                           <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Register Medicine</div>                                                                        
                                        
                                        <div class="widget-int"><?php echo $total2; ?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title"> Approved Medicine</div>
                                    
                                        <div class="widget-int"><?php echo $fetch2['approved']; ?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title"> Disapproved Medicine</div>
                                     
                                        <div class="widget-int"><?php echo $fetch2['disapproved']; ?></div>
                                    </div>
                                </div>                            
                                                           
                            </div> 
                            </a>                      
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>

                          <?php
      $abcc="select (select count(fld_medicine_id) from tbl_medicine where fld_medicine_request='requested to admin For approvel') as Request ";  
$query33=mysqli_query($connect,$abcc);
$fetch33=mysqli_fetch_array($query33);
?>      
                
                        <a href="medicine_user_request.php">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                         
                            <div class="widget widget-success widget-no-subtitle">
                                <div class="widget-big-int"> <span class="num-count"><?php echo $fetch33['Request']; ?></span></div>                            
                                <div class="widget-subtitle">Pending Request For Medicine</div>
                                                           
                            </div>    
                        </a>












                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                
                    
                      <?php
      $abc="select count(fld_medicine_id) as count, fld_medicine_name from tbl_medicine group by fld_medicine_id ";  
$query3=mysqli_query($connect,$abc);
?>      

        <div class="row">

        <div class="col-md-6">   
                    <div class="row">
						<div class="col-md-12">
                            
                         <!--  -->
            <div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
               <div id="donutchart" style="width: 700px; height: 365px;"></div>

                
                </div>
                            
                        </div>

						
                        
    

                </div>

                </div>
<div class="col-md-2">   </div>









                <div class="col-md-4">

                <div class="row">

                   <?php 
             $result = mysqli_query($connect,"select * from tbl_feedback");

$rows = mysqli_num_rows($result);



 ?>


          
                        <div class="col-md-12">

<a href="Feedback.php" class="tile tile-default">
                               <?php echo $rows; ?>
                                <p>Total Feedback</p>
                                
                                <div class="informer informer-success dir-tr"></div>
                            </a>                        
                        </div>
 <div class="col-md-12">

   <?php 
             $total11 = mysqli_query($connect,"select * from tbl_user_quetion");

$rows2 = mysqli_num_rows($total11);



 ?>
                       
                            <a href="Questions.php" class="tile tile-default">
                                <?php echo $rows2; ?>
                                <p>Total Quetions</p>
                                
                                <div class="informer informer-success dir-tr"></div>
                            </a>                        
                        </div>
 <div class="col-md-12">


                       
                            <div class="widget widget-success widget-item-icon">
                                <div class="widget-item-left">
                                    <img style="size: 8%" src="img/soldout.png">
                                </div>
                                <div class="widget-data">
                                    <br>
                                    <div class="widget-int num-count"><?php echo $fetch2['sold']; ?></div>
                                    <div class="widget-title"></div>
                                    <div class="widget-title"></div>
                                
                                    <div class="widget-subtitle">Total Sold Medicine</div>
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

        <!-- MESSAGE BOX-->
    
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

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_dashboard.js"></script>
      
    <script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
    <script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Vendor Count'],

          <?php 
              while($fetch3=mysqli_fetch_array($query3))
              { 
            ?>
                ['<?php echo $fetch3['fld_medicine_name']; ?>', <?php echo $fetch3['count']; ?>],
                
          <?php } ?>
        ]);

        var options = {
          title: 'All Medicine',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






