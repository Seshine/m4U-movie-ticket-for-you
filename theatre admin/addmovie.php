<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>T4U</title>
</head>

<body>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/form-layouts-one-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:28 GMT -->
<head> 
  
<title>T4U</title>
       <!-- META SECTION -->
             <?php  include("../controler/theatre admin/session/session.php"); ?>           
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="png.ico" type="image/x-icon" />
        <!-- END META SECTION -->
          <?php include("../controler/theatre admin/changeprofilepicController.php"); ?>               
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
         
      <?php include("../controler/theatre admin/addmovieController.php"); ?>  
 </head>       <!-- EOF CSS INCLUDE -->                
  
   
	
    
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
                             <img src="assets/<?php echo $ques['profilepics'];?>" alt="admin"  width="400" height="100"/>                        </div>
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
                          <li class="xn-openable">
                                <a href="view theatre.php"><span class="fa fa-tasks"></span> VIEW THEATER</a>                    </li>   
                            </li>
                   
                    <li class="xn-openable active">
                        <a href="addmovie.php"><span class="fa fa-tasks"></span>REQUEST MOVEIS</a></li>
                            
                         <li class="xn-openable">
                                <a href="viewmovie.php"><span class="fa fa-tasks"></span> VIEW MOVIES</a>                    </li>   
                            </li>
                    </li>                    
                   	 <li class="xn-openable"><a href="bookingdetails.php"><span class="fa fa-tasks"></span><span class="xn-text">BOOKING DETAILS</span></a></li>
				
                      
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
                <ul class="breadcrumb">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">REQUEST MOVIE</a></li>
                                    </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
						
						
						  
                            
                      
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>ADD MOVEIS</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
								 <section class="section clearfix" >
        
								 <div class="panel-body">
                                    <p class="style1">                              
									  </div>
                                      <form class="form-horizontal" method="post">
                                      <div class="container" >
                                
											
                                <div class="panel-body">
                                <p>                                
								</div>
								
								
								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">SELECT THEARTRE</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group"> 
											<span class="input-group-addon"><span class="fa fa-pencil"></span></span> <span class="style1"></span>
                                              <select class="form-control" name="set"  id="set" required="required">
											  <?php while($de=mysqli_fetch_array($qu)) {
											  ?>
											  <option><?php echo $de['name']; ?></option>
											  
											  <?php }?>
											  </select>
                                          </div><span class="help-block"></span>                                        </div>
                                    </div>
                                       
									   
									   <div class="form-group">
									   <label class="col-md-3 col-xs-12 control-label">MOVIE NAME</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group"> 
											<span class="input-group-addon"><span class="fa fa-pencil"></span></span> <span class="style1"></span>
                                              <input type="text" class="form-control" name="nam" id="nam" required="required"/>
                                          </div><span class="help-block"></span>                                        </div>
                                    </div>
									
					 <div class="panel-body">
                                <p>                                </div><div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">DIRECTOR</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group"> 
											<span class="input-group-addon"><span class="fa fa-pencil"></span></span> <span class="style1"></span>
                                              <input type="text" class="form-control" name="dam"  id="dam" required="required"/>
                                          </div><span class="help-block"></span>                                        </div>
                                    </div>
									
									
									
							 <div class="panel-body">
                                <p>                                </div><div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">PRODUCER</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group"> 
											<span class="input-group-addon"><span class="fa fa-pencil"></span></span> <span class="style1"></span>
                                              <input type="text" class="form-control" name="pam" id="pam" required="required"/>
                                          </div><span class="help-block"></span>                                        </div>
                                    </div>  
							
									
							
							
																							 
                                                                                             
																							 
																							 
																							 		
							 <div class="panel-body">
                                <p>                                </div><div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> CASTING</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group"> 
											<span class="input-group-addon"><span class="fa fa-pencil"></span></span> <span class="style1"></span>
                                              <input type="text" class="form-control" name="caam" id="caam" required="required"/>
                                          </div><span class="help-block"></span>                                        </div>
                                    </div>  
							<div class="panel-body">
                                <p>                                </div><div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">DURATIONS</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group"> 
											<span class="input-group-addon"><span class="fa fa-pencil"></span></span> <span class="style1"></span>
                                              <input type="text" class="form-control" name="duam" id="duam" required="required"/>
                                          </div><span class="help-block"></span>										                                        </div>
                                    </div> 
									
									
						
									  
									
									 <div class="panel-body">
                                    <p>                                </div><div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">STORY</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group"> 
											<span class="input-group-addon"><span class="fa fa-pencil"></span></span> <span class="style1"></span>
                                              <input type="text" class="form-control" name="stam" id="stam" required="required"/>
                                          </div><span class="help-block"></span>                                        </div>
                                    </div> 
									 
									 <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                   <div class="col-md-6 col-xs-12"> <input type="submit" class="btn btn-primary pull-right" value="Submit" name="sam" id="sam"/>
                                </div>
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







</body>
</html>
