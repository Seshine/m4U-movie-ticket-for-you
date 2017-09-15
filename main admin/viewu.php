<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
<head>   
 
   <?php include("../controler/session/session.php"); ?>
   <?php  include("../controler/main admin/changeprofilepicController.php"); ?>
  <?php include("../controler/main admin/viewuController.php"); ?>

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
                   
                    
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Register Theatre</h3>
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
                                                    
                                                    <th>Username</th>
													
													
                                                    
                                                    <th >Email name</th>
														
                                                    <th >Address</th>
												
                                                    <th >phone</th>
                                                      <th >About</th>   
                                                      <th >Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>           
                                        <?php while ($qi=mysqli_fetch_array($qu)) { ?>
                                         
                                            <tr>
                                                  <td>  <?php echo $qi['username'];?></td>
			                                <td>          <?php echo $qi['email'];?></td>
                                               <td>    <?php echo $qi['address'];?></td>
                                              <td><?php echo $qi['phone'];?></li></td>
                                                  <td>  <?php if( $qi['gender']==0){echo"male";}else{ echo "female";}?></td>

                                                    
                                          <td> <a href="#"  data-toggle="modal" data-value="<?php echo $qi['login_id']; ?>" data-target="#modal_udel" class="btn btn-default btn-rounded btn-condensed btn-sm sub"><span class="fa fa-times-circle"></span></a></td>    
                                             
 							</tr>
                            <?php } ?>
                                                    
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
         <div class="modal animated fadeIn" id="modal_udel" name="modal_udel" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">
                       Delete Registered user</h4>
                    </div>                    
                    <form  method="post" >
                    <div class="modal-body form-horizontal form-group-separated">
                        <div class="form-group">
                            <label class="col-md-6 control-label">User selected</label>
                            <div class="col-md-4">
                              
                                  <input type="hidden" name="del" id="del" >
                                </div>                            
                        </div>                        
                    </div>                 
                     
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="sub" name="sub">Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->  
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
	$('.sub').click(function(){
	            $('#del').val($(this).data('value'));
				
	});
    });
	
	</script>
	           
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:40 GMT -->
</html>






