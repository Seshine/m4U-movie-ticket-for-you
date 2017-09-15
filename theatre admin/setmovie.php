<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
<head>   
 <?php  include("../controler/theatre admin/session/session.php"); ?>


<?php include("../controler/theatre admin/setmovieController.php"); ?>     
            <?php include("../controler/theatre admin/addsetmovieController.php"); ?>       

		<!-- META SECTION -->
        <title>T4U</title>            
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
                    <li><a href="#">VIEW MOVIES</a></li>
                    <li class="active">SET MOVIES</li>
                </ul>
                <!-- END BREADCRUMB -->
                 <div class="row">
                        <div class="col-md-12">
                             <?php if(isset($_REQUEST['msg'])) { 
                                   if($_REQUEST['msg']=='d'){
                                    ?>
                                           <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Success</strong> Deleted Successfully                            </div>

                                    <?php 
                                   }
                                   else if($_REQUEST['msg']=='a'){
                                    ?>
                                           <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Success</strong> Added Successfully                            </div>

                                    <?php

                                   }
                                  
               } ?>
                            
                        </div>
                    </div> 
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> MOVEI LISTS</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
               

<div class="row">
 <div class="col-md-4">
                              <form method="post" class="form-horizontal">
                            <div class="panel panel-colorful">
                                <div class="panel-body">
                                    <h2>SETUP A MOVIE</h2>
                                    <p>SETUP YOUR MOVIE TIME</p>
                                   
                            
                                     <div class="form-group">
                                
                                        <label>Show</label>
                                  
                                       <select class="form-control"  name="mvshow" id="mvshow" required="required"  >
                                        <option value="">Select</option>
                                       <?php while($data3e=mysqli_fetch_array($shows))  { ?>
                                       <option value="<?php echo $data3e['id']; ?>"><?php  echo $data3e['showname'];?></option>
                                       <?php } ?>
                                       </select>
                                    </div>  
                                    <div class="form-group">
                                
                                        <label> Screen</label>
                                  
                                       <select class="form-control"  name="mvscreen" id="mvscreen" required="required">
                                        <option value="">Select</option>
                                       <?php while($data3e=mysqli_fetch_array($screens))  { ?>
                                       <option value="<?php echo $data3e['id']; ?>"><?php  echo $data3e['screenname'];?></option>
                                       <?php } ?>
                                       </select>
                                    </div>  
                                    <div class="form-group">
                                      <label>Movie Start Date</label>
                                      <input class="form-control" type="date" id="stdate" name="stdate" required="required" />
                                    </div>
                                    <div class="form-group">
                                      <label>Movie End Date</label>
                                      <input class="form-control" type="date" id="enddate" name="enddate" required="required" />
                                    </div>                         
                                </div>

                                <div class="panel-footer"> 
                                    <input type="submit" class="btn btn-success pull-right" value="ADD" name="setmovie" id="setmovie"/>
                                </div>
                            </div>
                                </form>
                        </div>

                        <div class="col-md-8">         
            <!-- END PAGE CONTENT -->
            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Movie Shows Settings</h3>
                                </div>
                                <div class="panel-body">
                                     <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Movie</th>
                                                    <th>Show </th>
                                                    <th>Screen </th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i=1;
                                                while($p=mysqli_fetch_array($smovies)){ ?>
                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $p['movie'] ?></td>
                                                    <td><?php echo $p['showname'] ?></td>
                                                    <td><?php echo $p['screen'] ?></td>
                                                    <td><?php echo $p['datefrom'] ?></td>
                                                    <td><?php echo $p['dateto'] ?></td>
                                                    <td>
                                                        <a data-toggle="modal" data-value="<?php echo $p['id']; ?>" data-target="#modal_delete_moviesettings" name="vdelete" class="btn btn-danger btn-rounded btn-condensed btn-sm delete" ><i class="fa fa-trash-o" ></i></a>
                                                    </td>
                                                </tr>
                                                <?php 
                                             $i++;
                                            } ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
            </div>
                    


</div>
 <div class="modal animated fadeIn" id="modal_delete_moviesettings" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">Delete Movie Settings</h4>
                    </div>                    
                    <form  method="post" >
                    <div class="modal-body">
                        <div class="text-center" id="cp_target">Do You want to delete?</div>
                        <input type="hidden" name="deletesettingsid" id="deletesettingsid"/>
                                             
                    </div>                    
                     
                   
                    <div class="modal-footer">
                        <button type="submit" id="moviesettingsdelete" name="moviesettingsdelete" class="btn btn-success" >Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                     </form>
                </div>
            </div>
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
           
             $('.delete').click(function(){
                    $("#deletesettingsid").val($(this).data('value'));
                });
        </script> 
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:39 GMT -->
</html>






