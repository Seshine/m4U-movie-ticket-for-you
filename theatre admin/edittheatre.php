<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/form-layouts-one-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:28 GMT -->
<head>  
<?php  include("../controler/theatre admin/session/session.php"); ?>
<?php include("../controler/theatre admin/edittheatreController.php"); ?>    
  
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
                                <img src="assets/<?php echo $ques['profilepics'];?>" alt="admin"  width="400" height="100"/>                               </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $_SESSION['userid']; ?></div>
                              
                            </div>
                            
                        </div>  
                        
                        <li class="xn-openable">
                        <a href="index.php"><span class="fa fa-cogs"></span> <span class="xn-text">HOME</span></a>                                                                        
                 
                            <li class="xn-openable">
                              <li>  <a href="profile.php"><span class="fa fa-tasks"></span> PROFILE</a>                    </li>   
                   
                   
                            <li class="xn-openable" >
                                <a href="addtheatre.php"><span class="fa fa-tasks"></span> REQUEST THEATER</a>                    </li>   
                            </li>
                                     <li class="xn-openable">
                        <a href="addshows.php"><span class="fa fa-tasks"></span><span class="xn-text">ADD SHOW</span></a>
                    </li> 
                     <li class="xn-openable">
                        <a href="addscreens.php"><span class="fa fa-tasks"></span><span class="xn-text">ADD SCREEN</span></a>
                    </li> 
                          <li class="xn-openable">
                                <a href="view theatre.php" class="active"><span class="fa fa-tasks"></span> VIEW THEATER</a>                    </li>   
                            </li>
                   
                    <li class="xn-openable">
                        <a href="addmovie.php"><span class="fa fa-tasks"></span>ADD MOVEIS</a></li>
                            
                         <li class="xn-openable">
                                <a href="viewmovie.php"><span class="fa fa-tasks"></span> VIEW MOVIES</a>                    </li>   
                            </li>
                    </li>                    
                   
                      	 <li class="xn-openable"><a href=""><span class="fa fa-tasks"></span><span class="xn-text">BOOKING DETAILS</span></a></li>
				
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
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
              <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">VIEWTHEATRE</a></li>
                     <li class="active">EDIT THEATRE</li>
                   
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal"  method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>EDIT</strong> THEATRE</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
								
								
								
								
                            
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
									
                                        
                                        <div class="col-md-6">
										 <div class="form-group">
                                                <label class="col-md-3 control-label" >SELECT CITY</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="cat" id="cat">
													<?php while($ps=mysqli_fetch_array($d)) { ?>
                                                        <option><?php echo $ps['city_name']; ?></option>
                                                       <?php }?>
                                                    </select>
                                                    <span class="help-block">Select city</span>                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">THEATRE NAME</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="nat" id="nat" value="<?php echo $p['name']; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">TYPE your THEATRE</span>                                                </div>
                                            </div>
                                            
                                            
                                            
                                           
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">FULL ADDRESS</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="aat" id="aat" placeholder="<?php echo $p['address']; ?>"" ></textarea>
                                                    <span class="help-block">ADDRESS textarea field</span>                                                </div>
                                            </div>
											
											 <div class="form-group">
                                                <label class="col-md-3 control-label">PINCODE</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="pat" id="pat"  value="<?php echo $p['pincode']; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">pin code</span>                                                </div>
                                            </div>
                                            
											
											
                                           
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">CONTACT</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="coat" id="coat"  value="<?php echo $p['phone_number']; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">List your Contact Details</span>                                                </div>
                                            </div>
											
											
											
											
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Datepicker</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="2014-11-01" name="created_at" id="created_at"  value="<?php echo $p['created_at']; ?>">                                            
                                                    </div>
                                                    <span class="help-block">Click on input field to get datepicker</span>                                                </div>
                                            </div>
                                            
                                            
                                           
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <input type="submit" class="btn btn-primary pull-right" value="update" name="usat" id="usat"/>
                                </div>
								</form>
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

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/form-layouts-one-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:28 GMT -->
</html>






