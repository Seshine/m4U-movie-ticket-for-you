<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
<head>    <?php  include("../controler/theatre admin/session/session.php"); ?>     
        <!-- META SECTION -->
        <title>T4U</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
         <?php include("../controler/theatre admin/changeprofilepicController.php"); ?>
        <link rel="icon" href="png.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
		
        <!-- EOF CSS INCLUDE -->
		<?php include("../controler/theatre admin/theatredeleteController.php");  ?>   
		<?php include("../controler/theatre admin/edittheatreController.php");  ?>                         
		<?php include("../controler/theatre admin/addtheatreController.php");  ?>  
		<?php include("../controler/theatre admin/addshowController.php");  ?>  
		         
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
                                <img src="assets/<?php echo $ques['profilepics'];?>" alt="admin"  width="400" height="100"/>                       </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $_SESSION['userid']; ?></div>
                               
                            </div>
                           
                        </div>  
                        
                        <li class="xn-openable">
                        <a href="index.php"><span class="fa fa-cogs"></span> <span class="xn-text">HOME</span></a>                         
                            <li class="xn-openable">
                              <li>  <a href="profile.php"><span class="fa fa-tasks"></span> PROFILE</a>                    </li>                                                  
                   
                   
                            <li class="xn-openable">
                                <a href="addtheatre.php"><span class="fa fa-tasks"></span> REQUEST THEATER</a>                    </li>   
                            </li>
                                     <li class="xn-openable">
                        <a href="addshows.php"><span class="fa fa-tasks"></span><span class="xn-text">ADD SHOW</span></a>
                    </li> 
                     <li class="xn-openable">
                        <a href="addscreens.php"><span class="fa fa-tasks"></span><span class="xn-text">ADD SCREEN</span></a>
                    </li> 
                          <li class="xn-openable active">
                                <a href="view theatre.php"><span class="fa fa-tasks"></span> VIEW THEATER</a>                    </li>   
                            </li>
                   
                    <li class="xn-openable">
                        <a href="addmovie.php"><span class="fa fa-tasks"></span>REQUEST MOVEIS</a></li>
                                     <
                         <li class="xn-openable">
                                <a href="viewmovie.php"><span class="fa fa-tasks"></span> VIEW MOVIES</a>                    </li>   
                            </li>
                    </li>                    
                   
                      	 <li class="xn-openable"><a href="bookingdetails.php"><span class="fa fa-tasks"></span><span class="xn-text">BOOKING DETAILS</span></a></li>
				
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
      <!----------------------------------------------slider-------------------------------------------------------->     
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
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
                   
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">VIEW THEATRE</a></li>
                    <li class="active">SHOW</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>theatre LISTS</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-6">

  <!------------------------------>                     

                            <!-- START CONTEXTUAL CLASSES TABLE SAMPLE -->
                           
                            <!-- END TABLE HOVER ROWS -->

                            <!-- START CONDENSED TABLE SAMPLE -->
                      
                            <!-- END BORDERED TABLE SAMPLE -->

                        </div>
                    </div>


                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Default</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    <th>THEATRE name</th>
													<th>city name</th>
													
                                                    
                                                    <th width="100">address</th>
														<th width="100">date</th>
                                                    <th width="100">add </th>
											
                                                    <th width="120">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                             <?php while($e=mysqli_fetch_array($de)) { ?>
											   <tr> 
                                                    <td class="text-center"><?php echo $e['id']; ?></td>
                                                    <td><strong><?php echo $e['name']; ?></strong></td>
													<td><strong><?php echo $e['city_id']; ?></strong></td>
                                                    
                                                  <td><strong><?php echo $e['address']; ?></strong></td>
                                                    <td>24/09/2014</td>
													<td><span class="label label-success"><a href="addshow.php?id=<?php echo $e['id']; ?>">ADD SHOW</a><br> <br><a href="addscreen.php?id=<?php echo $e['id']; ?>">ADD SCREEN</a></span></td>
													
                       
                                                    <td>
                                                        <a href="edittheatre.php?id=<?php echo $e['id']; ?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>
                                                       <a data-value="<?php echo $e['id'];?>" name="vdelete" class="btn btn-danger btn-rounded btn-condensed btn-sm vdelete" onClick="delete_row();"><span class="fa fa-times" name="delete"></span></a>
                                                    </td>
                                                </tr>
                                             <?php } ?>
                                            </tbody>
                                        </table>
										 </div>
                                </div>
                            </div>
                                    </div>                                
  <!-- CONTACT FORM --><div name="shows">
                        <div class="col-md-4">
<form method="post">
                            <div class="panel panel-colorful">
                                <div class="panel-body">
                                    <h2>ADD SHOW</h2>
                                    <p>ADD YOU SHOW TIME</p>
									
                                  <div class="form-group">
                                        <label>SHOW NAME</label>
                                     <input type="text" class="form-control" placeholder="movie name" name="mvname" id="mvname"/>
                                    </div>
									 <div class="form-group">
                                        <label>START SHOW   </label>
                                     <input type="text" class="form-control" placeholder="movie start" name="mvstime" id="mvstime"/>
									 <input type="text"  placeholder="AM/PM" name="am_pm" id="am_pm" width="5"/>
                                    </div>                     
                                    <div class="form-group">
                                        <label>END  SHOW</label>
                                     <input type="text" class="form-control" placeholder="movie END" name="mvetime" id="mvetime"/>
                                    </div>
									 <div class="form-group">
                                        <label>SELECT SHOW DATE </label>
                                         <input type="date" class="form-control" placeholder="end-time" name="mvdate" id="mvdate"/>
										
                                    </div> 
									                                
                                </div>
                                <div class="panel-footer"> 
                                    <input type="submit" class="btn btn-success pull-right" value="ADD" name="addshow" id="addshow"/>
                                </div>
								</form>
                            </div>
                        </div>
                 </div>   <!-- END RESPONSIVE TABLES -->
                    
                    <!-- START MANY COLUMNS  -->
                   
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
            <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <form method="post" id="dform" name="dform">
			<div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
					<input type="hidden" id="did" name="did" />
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <input type="submit" id="cdelete" name="cdelete" class="btn btn-success btn-lg mb-control-yes" value="Yes" />
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
			</form>
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
          <script type="text/javascript" src="js/demo_tables.js"></script> 
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
	});
	</script>
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
</html>






