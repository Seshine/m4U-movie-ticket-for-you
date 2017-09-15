 <?php include("../controler/theatre admin/changeprofilepicController.php"); ?>

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
                        
                        <li class="active">
                        <a href="index.php"><span class="fa fa-cogs"></span> <span class="xn-text">HOME</span></a>                                                                        
                      </li>
                  
                            <li class="xn-openable">
                               <a href="profile.php"><span class="fa fa-tasks"></span> PROFILE</a>                    
                              </li>  
                              
                   
                            <li class="xn-openable">
                            <a href="addtheatre.php"><span class="fa fa-tasks"></span> REQUEST THEATER</a> 
                            </li>   
                            <li class="xn-openable">
                        <a href="addshows.php"><span class="fa fa-tasks"></span><span class="xn-text">ADD SHOW</span></a>
                    </li> 
                     <li class="xn-openable">
                        <a href="addscreens.php"><span class="fa fa-tasks"></span><span class="xn-text">ADD SCREEN</span></a>
                    </li> 

                          <li class="xn-openable">
						  
                                <a href="view theatre.php"><span class="fa fa-tasks"></span><span class="xn-text"> VIEW THEATER</span></a>                    
                            </li>   
                            
                      
                   
					<li class="xn-openable">
                        <a href="addmovie.php"><span class="fa fa-tasks"></span>REQUEST MOVEIS</a>
                    </li>
                            
                    <li class="xn-openable">
                        <a href="viewmovie.php"><span class="fa fa-tasks"></span><span class="xn-text">VIEW MOVIES</span></a>                    
                    </li>   
                   
                    </li>                    
                 
				
					 <li class="xn-openable">
                        <a href="bookingdetails.php"><span class="fa fa-tasks"></span><span class="xn-text">BOOKING DETAILS</span></a>
                    </li>

				
					
                      
                <!-- END X-NAVIGATION -->
            </div>