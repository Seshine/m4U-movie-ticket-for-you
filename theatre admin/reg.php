<!DOCTYPE html>
<html lang="en" class="body-full-height">
    
<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/pages-login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:11 GMT -->
<head>        
        <!-- META SECTION -->
        <title>T4U</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="png.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <?php include("../controler/theatre admin/regController.php"); ?>
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                               
    </head>
    <body>
        
        <div class="login-container login-v2">
            
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please REGISTER.</div>
                    <form class="form-horizontal" method="post" >
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" name="uid" id="uid" required="required"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-lock"></span>
                                </div>                                
                                <input type="password" class="form-control" placeholder="Password" name="upassword" id="upassword" required="required"/>
                            </div>
                        </div>
                    </div>
					 <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-lock"></span>
                                </div>                                
                                <input type="password" class="form-control" placeholder="confirm Password" name="cupassword" id="upassword" required="required"/>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" name="slogin" id="slogin"/>
                        </div>
                    </div>
                    </form>
                </div>
                
            </div>
            
        </div>
        
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_5/html/pages-login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2015 05:26:11 GMT -->
</html>






