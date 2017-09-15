<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/form-layouts-two-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:28 GMT -->
<head>    
	   
    
        <!-- META SECTION -->
        <title>T4U</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
          <?php  include("../controler/session/session.php"); ?>  
        <link rel="icon" href="png.ico" type="image/x-icon" />
        <!-- END META SECTION -->
              <?php  include("../controler/main admin/changeprofilepicController.php"); ?>            
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                   
    </head>
	<body>
  
	 
       
  <?php include("../controler/main admin/editstateController.php"); ?>  
    <?php include("../controler/main admin/location-entryController.php"); ?> 
    <!-- START PAGE CONTAINER -->
        <div class="page-container" style="background-image:url('img/wood+pattern+texture+4.jpg')">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar"  >
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation"  >
                    <li class="xn-logo">
                        <a href="index.html"></a>
                        <a href="#" class="x-navigation-control" ></a>                    </li>
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
							
                            <div class="profile-controls" >
                                                           </div>
                        </div>                                                                        
                    </li>
              
                    <li class="xn-openable" >
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> <span class="xn-text">HOME</span></a>                    </li>
                      <li class="xn-openable" >
                        <a href="profile.php"><span class="glyphicon glyphicon-user"></span></span> <span class="xn-text">PROFILE</span></a>                    </li>
					
			
				     <li  class="xn-openable" >
                        <a href="index.php"><span class="glyphicon glyphicon-th"></span><span class="xn-text">COUNTRY</span></a>  
						
						<ul>
                            <li ><a href="form-layouts-two-column.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD COUNTRY</a></li>
                            <li><a href="table-basic.php"><span class="glyphicon glyphicon-eye-open"></span>SEE COUNTRY</a></li>
                          </ul>
				    </li>
					
				     <li class="xn-openable active"  >
                        <a href="index.php"><span class="glyphicon glyphicon-th-large"></span><span class="xn-text">STATE</span><span class="glyphicon glyphicon-chevron-right"></span></a>  
						
						<ul>
                            <li class="active" ><a href="add-state.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD STATE</a> </li>
                            <li><a href="table-state.php"><span class="glyphicon glyphicon-eye-open"></span>SEE STATE</a></li>
                          </ul>
				    </li>
                    
         <li class="xn-openable" >
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
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                  
                    <!-- END SEARCH -->
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->
                  
                    <!-- END TASKS -->
                    <!-- LANG BAR -->
                    
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">STATE</a></li>
                    <li><a href="table-state.php">VIEW STATE</a></li>
                    <li class="active">EDIT STATE</li>
                </ul>
                <!-- END BREADCRUMB -->
                <div style="background-image:url('img/Red-Material-Design-HD-Wallpaper.jpg')">
                <!-- PAGE CONTENT WRAPPER -->
				
                    <div class="row">
                        <div class="col-md-12">
                <div class="page-content-wrap" style="background-image:url('img/Red-Material-Design-HD-Wallpaper.jpg')" >
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal"   method="post"  name="editstate" id="editstate">   
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">EDIT<strong> STATE</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                    
                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Select country</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="selbox" id="selbox" value="selbox">
                                                    <?php while($p=mysqli_fetch_array($d)) {?>
											        <option><?php echo $p['country_name']; ?></option>
                                                      <?php } ?>
													
                                                    </select>
                                                    <span class="help-block">List of countrys</span>                                                </div>
                                            </div>
											<br><br><br>
											
											
											
											            
                                            
                         <label class="col-md-3 control-label">ADD STATE</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="statename" id="statename"
														 value="<?php 	echo $ps['state_name']; ?>" />
                                                    </div>                                            
                                                  </div>
                                            </div> 
											
						         
                                <div class="panel-footer">
                                    <input type="reset" class="btn btn-default" name="cloc" id="cloc"/>                                
                                    <input type="submit" class="btn btn-primary pull-right" name="sublose" id="sublose" value="update"/>
                                </div>
                            </div>
							
                            </form>
							
                            
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
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
</div>
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
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/form-layouts-two-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:28 GMT -->
</html>






