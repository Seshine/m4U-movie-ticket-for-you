<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:14:05 GMT -->
<head>        
        <!-- META SECTION -->
        <title>T4U</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="png.ico" type="image/x-icon" />
        <!-- END META SECTION -->
         
         <?php  include("../controler/session/session.php"); ?>
            <?php  include("../controler/main admin/registreduserController.php"); ?>
        <!-- CSS INCLUDE -->        
         <?php  include("../controler/main admin/changeprofilepicController.php"); ?>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                       
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container" style="background-image:url('img/wood+pattern+texture+4.jpg')">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar"  >
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation"  >
                    <li class="xn-logo">
                        <a href="../index.php"></a></li>
                    <li class="xn-profile"   >
                        <a href="#" class="profile-mini">
                            <img src="assets/<?php echo $ques['profilepics'];?>" alt="admin"/>                        </a>
                        <div class="profile" >
                            <div class="profile-image" >
                                <img src="assets/<?php echo $ques['profilepics'];?>" alt="admin" width="200" height="145"/>                            </div>
                            <div class="profile-data"  style="background-image:url('img/wood_wall_background_by_stock_by_casey-d3imijj.jpg')">
                                <div class="profile-data-name">admin</div>
                                <div class="profile-data-title">manage movie </div>
                            </div>
							
                           
                        </div>                                                                        
                    </li>
              
                    <li class="active"   >
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> <span class="xn-text">HOME</span><span class="glyphicon glyphicon-chevron-right"></span></a>                    </li>
                      <li >
                        <a href="profile.php"><span class="glyphicon glyphicon-user"></span></span> <span class="xn-text">PROFILE</span></a>                    </li>
					
			
				     <li >
                        <a href="index.php"><span class="glyphicon glyphicon-th"></span><span class="xn-text">COUNTRY</span></a>  
						
						<ul>
                            <li><a href="form-layouts-two-column.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD COUNTRY</a></li>
                            <li><a href="table-basic.php"><span class="glyphicon glyphicon-eye-open"></span>SEE COUNTRY</a></li>
                          </ul>
				    </li>
					
				     <li >
                        <a href="index.php"><span class="glyphicon glyphicon-th-large"></span><span class="xn-text">STATE</span></a>  
						
						<ul>
                            <li><a href="add-state.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD STATE</a></li>
                            <li><a href="table-state.php"><span class="glyphicon glyphicon-eye-open"></span>SEE STATE</a></li>
                          </ul>
				    </li>
                     <li >
                        <a href="index.php"><span class="glyphicon glyphicon-th-large"></span><span class="xn-text">CITY</span></a>  
						
						<ul>
                            <li><a href="add-city.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD CITY</a></li>
                            <li><a href="table-city.php"><span class="glyphicon glyphicon-eye-open"></span>SEE CITY</a></li>
                          </ul>
				    </li>
					<li>
					<a href="index.php"><span class="glyphicon glyphicon-th-large"></span><span class="xn-text">MANAGE THEATRE</span></a>  
						
						<ul>
                            <li><a href="addtheatre.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD THEATRE</a></li>
                            
							<li> <a href="view theatre.php"><span class="fa fa-tasks"></span><span class="xn-text"> VIEW THEATER</span></a></li>
							<li> <a href="viewmovie.php"><span class="fa fa-tasks"></span><span class="xn-text">VIEW MOVIES</span></a></li>
                          </ul>
				    </li>
					
         
                      
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
      <!----------------------------------------------slider-------------------------------------------------------->      
            <!-- PAGE CONTENT -->
            <div class="page-content" style="background-image:url('img/wood_slats_colors_rainbow_55219_1920x1080.jpg')">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel"  >
                    <!-- TOGGLE NAVIGATION -->
                  
                    <!-- END SEARCH -->                    
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                           
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>  
						  <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                                      
                    </li> 
                    <!-- END POWER OFF -->                    
                   
                    <!-- END TASKS -->
                    <!-- LANG BAR -->
                   
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
<!--------------------------------------------------header----------------------------------------------------------------->
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                                     
                    <li class="active">HOME</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap" >
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                              
                           <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onClick="location.href='view.php';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"></div>
                                    <div class="widget-title">CHECK IN</div>
                                    <div class="widget-subtitle"><?php echo "register theatre users are:". $re;?></div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="view.php" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                        </div>
                        <div class="col-md-3">
                            
                           
                        </div>
                        <div class="col-md-3">
                            
                           <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onClick="location.href='viewu.php';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"></div>
                                    <div class="widget-title">CHECK IN</div>
                                    <div class="widget-subtitle"><?php echo "register user are:". $r;?></div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="viewu.php" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                        </div>
                  
                    <!-- END WIDGETS -->                    
                    
                    <div class="row" >
                        <div class="col-md-8" >
                            
                          
                            <!-- END USERS ACTIVITY BLOCK -->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            
                            <!-- START SALES & EVENTS BLOCK -->
                            
                            <!-- END SALES & EVENTS BLOCK -->
                        </div>
                   <div class="row">
                        <div class="col-md-4">
                            
                           
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
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
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
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:15:26 GMT -->
</html>






