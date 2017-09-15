<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
<head>   
 <?php  include("../controler/theatre admin/session/session.php"); ?>     
        <!-- META SECTION -->
        <title>T4u</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="png.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
		
        <!-- EOF CSS INCLUDE -->       
		<?php include("../controler/theatre admin/addtheatreController.php");  ?>     
		<?php include("../controler/theatre admin/theatredeleteController.php");  ?>                            
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
                   
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">HOME</a></li>
                   
                    <li class="active">VIEW THEATRE</li>
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

  
                        </div>
                    </div>


                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($_REQUEST['idd'])){ 
                                    if($_REQUEST['idd']==1){ ?>
<div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Success!</strong> Theater Added Successfully.
                            </div>
<?php }
  elseif($_REQUEST['idd']==2){ ?>

<div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Error!</strong> Theater is already existing.
                            </div>
 <?php  }
 elseif($_REQUEST['idd']==3){ ?>

<div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Error!</strong> Shows added successfully.
                            </div>
 <?php  }
 elseif($_REQUEST['idd']==4){ ?>

<div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Error!</strong> Screen Added successfully.
                            </div>
 <?php  }
}
 ?>
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
                                                    <th width="50">SI.No</th>
                                                    <th>THEATRE name</th>
													<th>city name</th>
													
                                                    
                                                    <th width="100">address</th>
													
                                                    
                                                   <th>Show</th>
                                                    <th>Screen</th>
                                                    <th width="120">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                             <?php $i=1; while($e=mysqli_fetch_array($de)) { ?>
											   <tr> 
                                                    <td class="text-center"><?php echo $i; ?></td>
                                                    <td><strong><?php echo $e['name']; ?></strong></td>
													<td><strong><?php echo $e['city_name']; ?></strong></td>
                                                    
                                                  <td><strong><?php echo $e['address']; ?></strong></td>
                                                   
                                                    
<td><?php if($e['status']==1) { ?>
                                                 <a href="#"  data-toggle="modal" data-value="<?php echo $e['id']; ?>" data-target="#modal_add_show" class="btn btn-default btn-rounded btn-condensed btn-sm addshowscat"><i class="fa fa-plus"></i></a>

 <a  href="viewtheatershow.php?id=<?php echo $e['id']; ?>" class="btn btn-default btn-rounded btn-condensed btn-sm "><i class="fa fa-eye"></i></a>
 <?php } else{
                    echo "No Actions until approved";
                                                        }
                                                            
                                                         ?>
                                                   
												   
												    </td>
                                                    <td> <?php if($e['status']==1) { ?>
 <a href="#"  data-toggle="modal" data-value="<?php echo $e['id']; ?>" data-target="#modal_add_screen" class="btn btn-default btn-rounded btn-condensed btn-sm addscreencat"><i class="fa fa-plus"></i></a>

 <a href="viewtheaterscreen.php?id=<?php echo $e['id']; ?>"   class="btn btn-default btn-rounded btn-condensed btn-sm "><i class="fa fa-eye"></i></a>

                                      <?php } else{
                                                            echo "No Actions until approved";
                                                        }
                                                            
                                                         ?>               </td>
                                                    <td>
													
                                                        <a href="edittheatre.php?id=<?php echo $e['id']; ?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>
                                                        <a data-value="<?php echo $e['id'];?>" name="vdelete" class="btn btn-danger btn-rounded btn-condensed btn-sm vdelete" onClick="delete_row();"><span class="fa fa-times" name="delete"></span></a>
                                                    </td>

                                                </tr>
                                             <?php $i++; } ?>
                                            </tbody>
                                        </table>
										 </div>
                                </div>
                            </div>
                                    </div>  
									     

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
					 <!-- END RESPONSIVE TABLES -->
                    
                    <!-- START MANY COLUMNS  -->
                   
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
                    
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
                            <label class="col-md-4 control-label">Select Shows</label>
                            <div class="col-md-4">
                               <select id="showcat" name="showcat[]" class="form-control" multiple>
                                    <option value="">select</option>
                                    <?php while($p=mysqli_fetch_array($shows)){
                                        ?>
                                        <option value="<?php echo $p['id']; ?>"><?php echo $p['showname'];?></option>
                                        <?php
                                    } ?>
                               </select>
                                 <input type="hidden" name="theaterid" id="theaterid" >
                                </div>                            
                        </div>                        
                    </div>                 
                     
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="addshowstype" name="addshowstype">Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
         <div class="modal animated fadeIn" id="modal_add_screen" name="modal_add_screen" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">
                        Add Screen Category</h4>
                    </div>                    
                    <form  method="post" >
                    <div class="modal-body form-horizontal form-group-separated">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Select Screen</label>
                            <div class="col-md-4">
                               <select id="screencat" name="screencat[]" class="form-control" multiple required>
                                    <option value="">select</option>
                                    <?php while($p=mysqli_fetch_array($screens)){
                                        ?>
                                        <option value="<?php echo $p['id']; ?>"><?php echo $p['screenname'];?></option>
                                        <?php
                                    } ?>
                               </select>
                                  <input type="hidden" name="theaterid2" id="theaterid2" >
                                </div>                            
                        </div>                        
                    </div>                 
                     
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="addscreentype" name="addscreentype">Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                     </form>
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
    $('.addshowscat').click(function(){
                $('#theaterid').val($(this).data('value'));
                
    });
    $('.addscreencat').click(function(){
                $('#theaterid2').val($(this).data('value'));
                
    });
	});
	</script>
		

	
	             
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
</html>






