<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from trendingtemplates.com/demos/trips/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2015 05:27:36 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>movie ticket booking</title>
	
<?php include("connection/config.php");  include("controler/t4u/registerController.php");  ?>
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/F:\apps\Themes\My Theme\My Icons\computer\Diamond Icon 02.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="F:\apps\Themes\My Theme\My Icons\computer\Diamond Icon 02.ico" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Default Styles -->
    <link href="style.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="rs-plugin/css/settings.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

   <?php include("topbar.php"); ?>
    
     
<?php include("header.php"); ?>
   
 
    <section id="page-header" class="section background" >
	
        <div class="container"  style="background-color:#FFFF00">
          <div class="row">
            <div class="col-sm-12">
              <h3> Register</h3>
            </div>
          </div>
           <!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->
   
    <section class="section clearfix" style="background-color:orange">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="row">
                        <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                            <div class="post-wrapper row clearfix">
                               	 
                                <div class="col-md-6">
                                    <h5>NEW CUSTOMER</h5>
                                    <p>I am a NEW  customer</p>
                                    <br>

                                    <form  method="post">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Username:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputname" name="inputname" placeholder="full name" required="required">
                                        </div>
                                            <label for="inputPassword3" class="col-sm-2 control-label" >Password:</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required="required">
                                        </div>
                                       
                                        </div>
										
										
										
                                              <div class="form-group">
                                            
                                            <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password:</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="cinputPassword" name="cinputPassword" placeholder="retype-Password" required="required">
                                        </div>
										 <label for="inputEmail3" class="col-sm-2 control-label">Address:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control"  id="inputaddress" name="inputaddress" required="required" > </textarea>
                                        </div>
										<label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required="required">
                                        </div>
										
										
										<label for="inputEmail3" class="col-sm-2 control-label">phone number:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputphone" name="inputphone" placeholder="phone number" required="required">
                                        </div>
										<label for="inputEmail3" class="col-sm-2 control-label">gender:</label>
                                        <div class="col-sm-10">
                                           <label>Male</label> <input type="radio"   name="s" value="0" required="required">
											<label>|female</label><input type="radio"    name="s" value="1" required="required">
                                        </div>
										
										
									</div>
										
										
										
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <hr>
											 <button type="reset" class="btn btn-primary btn-normal border-radius pull-right">cancel</button>
                                    <input type="submit" class="btn btn-primary btn-normal border-radius" name="register" id="register" value="Register Now"/>
                                           
                                        </div>
                                        </div>
                                    </form>

                                </div><!-- end col -->


                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
				
                                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->
	</div><!-- end row --></div><!-- end col -->
 
                                 
                                
   <?php include("footer.php"); ?>         

    
</body>

<!-- Mirrored from trendingtemplates.com/demos/trips/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2015 05:27:36 GMT -->
</html>