<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
<head>   
 <?php  include("../controler/theatre admin/session/session.php"); ?>   
 <?php include("../controler/theatre admin/changeprofilepicController.php"); ?>   
  
         <!-- META SECTION -->
        <title>T4U</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="png.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                       
    </head>
    <body>
       <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html"></a>
                        <a href="#" class="x-navigation-control"></a>                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/<?php echo $ques['profilepics'];?>" alt="admin"/>                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/<?php echo $ques['profilepics'];?>" alt="admin"  width="400" height="100"/>                                         </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $_SESSION['userid']; ?></div>
                                
                            </div>
                           
                        </div>  
                        
                        <li class="active">
                        <a href="index.php"><span class="fa fa-cogs"></span> <span class="xn-text">HOME</span></a>                                                                        
                   
                            <li class="xn-openable">
                              <li>  <a href="profile.php"><span class="fa fa-tasks"></span> PROFILE</a>                    </li>   
                   
                  
                   
                            <li class="xn-openable">
                              <li>  <a href="addtheatre.php"><span class="fa fa-tasks"></span> REQUEST THEATER</a>                    </li>   
                            </li>
                                     <li class="xn-openable">
                        <a href="addshows.php"><span class="fa fa-tasks"></span><span class="xn-text">ADD SHOW</span></a>
                    </li> 
                     <li class="xn-openable">
                        <a href="addscreens.php"><span class="fa fa-tasks"></span><span class="xn-text">ADD SCREEN</span></a>
                    </li> 
                          <li class="xn-openable">
						  <li>
                                <a href="view theatre.php"><span class="fa fa-tasks"></span><span class="xn-text"> VIEW THEATER</span></a>                    </li>   
                            </li>
                   
                    <li class="xn-openable">
					<li>
                        <a href="addtheatre.php"><span class="fa fa-tasks"></span>REQUEST MOVEIS</a></li>
                            
                         <li class="xn-openable">
                                <a href="viewmovie.php"><span class="fa fa-tasks"></span><span class="xn-text">VIEW MOVIES</span></a>                    </li>   
                            </li>
                    </li>                    
                 
				
					 <li class="xn-openable active"><a href=""><span class="fa fa-tasks"></span><span class="xn-text">BOOKING DETAILS</span></a></li>
				
					
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
               <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    
                    <!-- END SEARCH -->
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                          
                             <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->
                   
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">HOME</a></li>                    
                    <li class="active"><a href="#">BOOKING DETAILS</a></li>
                    
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> BOOKING DETAILS</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Default</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                          
                                                <div class="row">
                                           
                                            <div class="col-sm-6">
                                                <h6>TICKET INFO</h6>
                                               

                                                <ul class="clearfix">
                                                    <li><span>MOVIE NAME:</span> </li><?php echo $_SESSION['b'];?></li>
                                                    <li><span>THEATRE NAME:</span> <?php echo $_SESSION['a'];?></li>
                                                    <li><span>NUMBER OF SEATS:</span><?php echo $_SESSION['c'];?></li>
                                                     <li><span>SCREEN NAME:</span><?php echo $_SESSION['d'];?>
                                                    <li><span>DATE :</span> --<?php echo $_SESSION['e'];?></li>
													<li><span>TOTTAL AMOUNT :<?php echo $_SESSION['f'];?></li>
                                                </ul>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end col -->


                         
                       
                    </div>                                
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->     
		<div class="modal animated fadeIn" id="modal_add_show" name="modal_add_show" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">
                        Add Show Category</h4>
                    </div>                    
                    <form  method="post" >
                    <div class="modal-body form-horizontal form-group-separated">
                        <div class="form-group">
                            <label class="col-md-6 control-label">Do you want to confirm this booking</label>
                           
                             
                                 <input type="hidden" name="bookingid" id="bookingid" >
                                                        
                        </div>                        
                    </div>                 
                     
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="acceptbooking" name="acceptbooking">Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
        
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

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
	<script type="text/javascript">
	$(document).ready(function(){
	$('.vdelete').click(function(){
	            $('#did').val($(this).data('value'));
				
	});
    $('.changestatus').click(function(){
                $('#bookingid').val($(this).data('value'));
                
    });
    $('.addscreencat').click(function(){
                $('#theaterid2').val($(this).data('value'));
                
    });
	});
	</script>
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:40 GMT -->
</html>






