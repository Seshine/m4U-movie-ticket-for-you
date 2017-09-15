<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
<head>        
     <?php  include("../controler/theatre admin/session/session.php"); ?>      
<?php include("../controler/theatre admin/moviedeleteController.php"); ?>
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
		   <?php include("../controler/theatre admin/addmovieController.php"); ?> 
		   	                                        
    </head>
    <body>
      <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <?php include('menu.php'); ?>
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
                    
                    <li class="active">VIEW MOVIES</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> MOVEI LISTS</h2>
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
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    <th>movie name</th>
													
													<th>theatre name</th>
                                                    <th>Director</th>
                                                    <th>Producer</th>
                                                    <th width="100">status</th>
                                                    <th width="100">date</th>
														
                                                    <th width="100">Poster</th>
												 <th width="100">Set Show and Screen</th>
                                                    <th width="120">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                           
                                       <?php while($e=mysqli_fetch_array($movies)) { ?>
                                               <tr> 
                                                    <td class="text-center"><?php echo $e['id']; ?></td>
                                                     
                                                    <td><strong><?php echo $e['movie']; ?></strong></td>
                                                    <td>
                                                    <?php echo $e['theater']; ?>

                                                </td>
                                                    <td ><?php echo $e['director']; ?></td>
                                                    <td><?php echo $e['producer']; ?></td>
                                                    <td><strong><?php if($e['status']==1) echo "Approved"; else echo "Not Approved";?></strong></td>
                                                    
                                                  <td><strong><?php echo $e['created_at']; ?></strong></td>
                                                    
                                                    <td>
                                                        <?php if($e['status']==1) { ?>
                                                        <span class="label label-success">
                                                            <a href="addposter.php?id=<?php echo $e['id']; ?>">ADD POSTER</a>
                                                           
                                                           
                                                        </span>
                                                        <?php } else{
                                                            echo "No Actions until approved";
                                                        }
                                                            
                                                         ?>
                                                        </td>
                                                     <td>
                                                         <?php if($e['status']==1) { ?>
                                                        <span class="label label-success">
                                                             <a href="setmovie.php?id=<?php echo $e['theaterid']; ?>&&id2=<?php echo $e['id']; ?>">SET MOVIE FOR SHOW</a></span>
                                                         
                                                              <?php }  else{
                                                            echo "No Actions until approved";
                                                        }?>
                                                    </td>
                                                    <td>
                                                        <a href="editmovie.php?id=<?php echo $e['id']; ?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>
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
                            <input type="submit" id="mdelete" name="mdelete" class="btn btn-success btn-lg mb-control-yes" value="Yes" />
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
        <!-- END MESSAGE BOX-->s

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






