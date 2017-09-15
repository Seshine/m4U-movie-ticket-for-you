<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
<head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
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
	  <?php include("../controler/main admin/state-entryController.php"); ?> 
    
    <?php include("../controler/main admin/state-deleteController.php"); ?> 
  
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
                            <img src="assets/images/users/user4.jpg" alt="admin"/>                        </a>
                        <div class="profile" >
                            <div class="profile-image" >
                                <img src="img/30000668.jpg" alt="John Doe" width="200" height="145"/>                            </div>
                            <div class="profile-data"  style="background-image:url('img/wood_wall_background_by_stock_by_casey-d3imijj.jpg')">
                                <div class="profile-data-name">admin</div>
                                <div class="profile-data-title">manage web site </div>
                            </div>
							
                            <div class="profile-controls" >
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>                            </div>
                        </div>                                                                        
                    </li>
              
                    <li  class="xn-openable"  >
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> <span class="xn-text">HOME</span><span class="glyphicon glyphicon-chevron-right"></span></a>                    </li>
                      <li class="xn-openable">
                        <a href="pages-edit-profile.html"><span class="glyphicon glyphicon-user"></span></span> <span class="xn-text">PROFILE</span></a>                    </li>
					
			
				     <li class="xn-openable"  >
                        <a href="index.php"><span class="glyphicon glyphicon-th"></span><span class="xn-text">COUNTRY</span></a>  
						
						<ul>
                            <li><a href="form-layouts-two-column.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD COUNTRY</a></li>
                            <li><a href="table-basic.php"><span class="glyphicon glyphicon-eye-open"></span>SEE COUNTRY</a></li>
                          </ul>
				    </li>
					
				     <li class="xn-openable active" >
                        <a href="index.php"><span class="glyphicon glyphicon-th-large"></span><span class="xn-text">STATE</span></a>  
						
						<ul>
                            <li><a href="add-state.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD STATE</a></li>
                            <li class="active"><a href="table-state.php"><span class="glyphicon glyphicon-eye-open"></span>SEE STATE</a></li>
                          </ul>
				    </li>
                    
         <li  class="xn-openable">
                        <a href="index.php"><span class="glyphicon glyphicon-th-large"></span><span class="xn-text">CITY</span></a>  
						
					<ul>
                            <li><a href="add-city.php"><span class="glyphicon glyphicon-plus-sign"></span> ADD CITY</a></li>
                            <li><a href="table-city.php"><span class="glyphicon glyphicon-eye-open"></span>SEE CITY</a></li>
                          </ul>
				    </li>
         
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
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="pages-lock-screen.html"><span class="fa fa-lock"></span> Lock Screen</a></li>
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                    <!-- LANG BAR -->
                   
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Basic</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span><strong> STATE LISTS</strong></h2>
                
                    
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-6">
                    

                            <!-- START CONTEXTUAL CLASSES TABLE SAMPLE -->
                           
                            <!-- END TABLE HOVER ROWS -->

                            <!-- START CONDENSED TABLE SAMPLE -->
                      
                            <!-- END BORDERED TABLE SAMPLE -->

                        </div>
                    </div>

</div>
 
 
 
 
 
 
 
 
 
 
 
 



                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
          
                            <div class="panel panel-default">



                                <div class="panel-heading">
                                    <h3 class="panel-title">STATE tables</h3>
                                </div>
								


                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
									
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    
													<th width="100">state</th>
                                                    <th width="120"> country</th>
                                                   
                                                    <th width="100">date</th>
                                                    <th width="120">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>  
											<?php while($p=mysqli_fetch_array($da))
											{ ?>                                        
                                                <tr >
                                                    <td class="text-center"><?php echo $p['id']; ?></td>
													
                                                    <td><strong> <?php echo $p['state_name']; ?> </strong></td>
                                                    <td ><span class="label label-success"><a href=""><?php echo $p['country']; ?></a></span></td>
                                                  
                                                    <td><?php echo $p['created_at']; ?></td>
												
                                                    <td>
                                                        <a href="editstate.php?id=<?php echo $p['id'];?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>
                                                        <a data-value="<?php echo $p['id'];?>" name="vdelete" class="btn btn-danger btn-rounded btn-condensed btn-sm vdelete" onClick="delete_row('');"><span class="fa fa-times" name="delete"></span></a>
                                                    </td>
                                                </tr> 
												<?php  } ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                    
                    <!-- START MANY COLUMNS  -->
                   
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

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
                             <input type="submit" id="sdelete" name="sdelete" class="btn btn-success btn-lg mb-control-yes" value="Yes" />
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
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
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
        
        <script type="text/javascript" src="js/demo_tables.js"></script>     
        <!-- END THIS PAGE PLUGINS-->  
        
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






