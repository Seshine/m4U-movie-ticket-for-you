<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/pages-edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:25:57 GMT -->
<head>    
  <?php  include("../controler/session/session.php"); ?>    
        <!-- META SECTION -->
        <title>T4U</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="png.ico" type="image/x-icon" />
        <!-- END META SECTION -->
               
 <?php  include("../controler/main admin/profileController.php"); ?>
 <?php  include("../controler/main admin/changepassword.php"); ?>
  <?php  include("../controler/main admin/changeprofilepicController.php"); ?>
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" href="css/cropper/cropper.min.css"/>
        <!--  EOF CSS INCLUDE -->        
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                   
    </head>
    <body>  <!-- START PAGE CONTAINER -->
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
                                <img src="assets/<?php echo $ques['profilepics'];?>" alt="admin" width="200" height="145"/>                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $_SESSION['userida'] ?></div>
                                <div class="profile-data-title">manage movie </div>
                            </div>
                            
                        </div>                                                                        
                    </li>
                   <li   >
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> <span class="xn-text">HOME</span><span class="glyphicon glyphicon-chevron-right"></span></a>                    </li>
                      <li class="active"  >
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
                    <li><a href="index.php">HOME</a></li>
                    
                    <li class="active">PROFILE</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-cogs"></span> Edit Profile</h2>
                </div>
                <!-- END PAGE TITLE -->                     
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                  
                    
                    <div class="row">                        
                        <div class="col-md-3 col-sm-4 col-xs-5">
                            
                            <form action="#" class="form-horizontal">
                            <div class="panel panel-default">                                
                                <div class="panel-body">
                                    <h3><span class="fa fa-user"></span> <?php echo $_SESSION['userida'] ?></h3>
                                    <p>MANAGE MOVIE / Administrator</p>
                                    <div class="text-center" id="user_image">
                                        <img src="assets/<?php echo $ques['profilepics'];?>" class="img-thumbnail"/>                                    </div>                                  
                                </div>
                                <div class="panel-body form-group-separated">
                                    
                                    <div class="form-group">                                        
                                        <div class="col-md-12 col-xs-12">
                                            <a href="#" class="btn btn-primary btn-block btn-rounded" data-toggle="modal" data-target="#modal_change_photo">Change Photo</a>                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">#ID</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="01" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Login</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $_SESSION['userida'] ?>" class="form-control"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">E-mail</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $qu['email'];?>" class="form-control"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <div class="col-md-12 col-xs-12">
                                            <a href="#" class="btn btn-danger btn-block btn-rounded" data-toggle="modal" data-target="#modal_change_password">Change password</a>                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-7">
                            
                            <form action="#" class="form-horizontal" method="post">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3><span class="fa fa-pencil"></span> Profile</h3>
                                    
                                </div>
                                <div class="panel-body form-group-separated">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">First Name</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $qu['name'];?>" class="form-control" name="name" id="name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Last Name</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $qu['lastname'];?>" class="form-control" name="lastname" id="lastname"/>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Email</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="email" value="<?php echo $qu['email'];?>" class="form-control" name="email" id="email"/>
                                        </div>
                                         <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">phone</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="number" value="<?php echo $qu['phone'];?>" class="form-control" name="phone" id="phone"/>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Location</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $qu['locations'];?>" class="form-control" name="locations" id="locations"/>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-border-left">
                                        <label class="col-md-3 col-xs-5 control-label">About me</label>
                                        <div class="col-md-9 col-xs-7">
                                            <textarea class="form-control" rows="5" name="about" id="about"><?php echo $qu['about'];?></textarea>
                                        </div>
                                    </div>                                          
                                    <div class="form-group">
                                        <div class="col-md-12 col-xs-5">
                                            <input type="submit" class="btn btn-primary btn-rounded pull-right" value="Save" name="tsave" id="tsave"/>
                                        </div>
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
        
        <!-- MODALS -->
        <div class="modal animated fadeIn" id="modal_change_photo" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">Change photo</h4>
                    </div>                    
                   
                    <form  method="post" enctype="multipart/form-data" name="addpics" id="addpics" >
                    <div class="modal-body form-horizontal form-group-separated">
                        <div class="form-group">
                            <label class="col-md-4 control-label">New Photo</label>
                            <div class="col-md-4">
                                <input type="file" class="fileinput btn-info" name="fpics" id="fpics"  title="Select file"/>
                            </div>                            
                        </div>                        
                    </div>
                  
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success " id="savepics" name="savepics" value="Accept"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
				    </form>
            </div>
        </div>
      
        <div class="modal animated fadeIn" id="modal_change_password" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">Change password</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <form method="post">
                    <div class="modal-body form-horizontal form-group-separated">                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Old Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="old_password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">New Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="new_password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Repeat New</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="re_password"/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-danger"  name="pass" id="pass" value="Proccess"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>   
        </form>     
        <!-- EOF MODALS -->
        
        <!-- BLUEIMP GALLERY -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>      
        <!-- END BLUEIMP GALLERY -->        
        
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->          
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/jquery/jquery-migrate.min.js"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>  
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/form/jquery.form.js"></script>
        
        <script type="text/javascript" src="js/plugins/cropper/cropper.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>        
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_edit_profile.js"></script>
        <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->         
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/pages-edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:04 GMT -->
</html>






