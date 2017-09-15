<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from trendingtemplates.com/demos/trips/shortcodes-pricing-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2015 05:28:03 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>T4U</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
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
      <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
      <?php include("controler/t4u/schedulController.php"); ?> 
     <?php include("controler/t4u/3slideController.php"); ?> 
     <?php include("controler/user/userbookingController.php"); ?> 
</head>
<body>



<?php include("topbar.php"); ?>

<?php include("header.php"); ?>
<br><br><br /><br />
   <section class="section clearfix" style="background-color:#99FF00">
        <div class="container">
            <div class="popular-destinations clearfix">
                <div class="tp-banner-container">
                    <div id="banner2" class="tp-banner">
                        <ul>
                        <?php while($p=mysqli_fetch_array($qu)) {?>
                            <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="posters/big/<?php echo $p['bigposter'];?>"  data-saveperformance="off"  data-title="Parallax 3D">
                                <img src="posters/big/<?php echo $p['bigposter'];?>"  alt="greenbg" data-lazyload="posters/big/<?php echo $p['bigposter'];?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                <div class="tp-caption slider-title tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="201"
                                    data-speed="1000" 
                                    data-start="800" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                </div>
                                <div class="tp-caption slider-title1 tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="341"
                                    data-speed="1000" 
                                    data-start="1000" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                </div>
                                <div class="tp-caption slider-btn tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="465"
                                    data-speed="1000" 
                                    data-start="1000" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                  
                                    
                                </div>
                            </li>
                            <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="upload/parallax_slider_02.jpg"  data-saveperformance="off"  data-title="Parallax 3D">
                                <img src="posters/big/<?php echo $p['bigposter2'];?>"  alt="greenbg" data-lazyload="posters/big/<?php echo $p['bigposter2'];?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                <div class="tp-caption slider-title tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="201"
                                    data-speed="1000" 
                                    data-start="800" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                    
                                </div>
                                <div class="tp-caption slider-title1 tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="341"
                                    data-speed="1000" 
                                    data-start="1000" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                </div>
                                <div class="tp-caption slider-btn tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="465"
                                    data-speed="1000" 
                                    data-start="1000" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                    
                                   
                                </div>
                            </li>
                           
                            <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="upload/parallax_slider_03.jpg"  data-saveperformance="off"  data-title="Parallax 3D">
                                <img src="posters/big/<?php echo $p['bigposter3'];?>"  alt="greenbg" data-lazyload="posters/big/<?php echo $p['bigposter3'];?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                <div class="tp-caption slider-title tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="201"
                                    data-speed="1000" 
                                    data-start="800" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                    
                                </div>
                                <div class="tp-caption slider-title1 tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="341"
                                    data-speed="1000" 
                                    data-start="1000" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                </div>
                                <div class="tp-caption slider-btn tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                                    data-x="center" 
                                    data-y="465"
                                    data-speed="1000" 
                                    data-start="1000" 
                                    data-easing="Power3.easeInOut" 
                                    data-elementdelay="0.1" 
                                    data-endelementdelay="0.1" 
                                    data-endspeed="300" 
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                    
                                  
                                </div>
                            </li>
                        </ul>   
                    </div>
                </div>  
 <?php }?>
               
                  
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end related-hotels -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix section-light" style="background-color:#99FF00">
        <div class="container">
            <div class="hotel-title">
      

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->  



    <section class="section clearfix">
        <div class="container" style="background-image:url(posters/small/25022assassin%27s%20creed%20wallpaper%2017%20%5Bvikitech%5D.jpg)">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h3>LOCATIONS</h3>
                                </div><!-- end header -->
                                <div class="pricing-table-body">
                                    <div class="pricing-price">
                                        
                                       
                                    </div>
                                    <ul>
                                    <li>COUNTRY:<?php echo $er['country_name'];?> </li>
                                      <li>STATE:<?php echo $er['state_name'];?> </li>
                                        <li>CITY:<?php echo $er['city_name'];?> </li>
                                        
                                       
                                    </ul>
                                </div><!-- end body -->
                                <div >
                                    
                                </div><!-- end footer -->
                            </div><!-- end pricing-table -->
                        </div><!-- end col -->

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                   <h3>THEATRE NAME:<?php echo $pt['name'];?></h3>
                              
                                </div><!-- end header -->
                                <div class="pricing-table-body">
                                    <div class="pricing-price">
                                       
                                    </div>
                                    <ul>
                                        <li><b>NAME:</b><?php echo $pt['name'];?> </li>
                                              <li>ADDRESS:<?php echo $pt['address'];?> </li>
                                                    <li>PIN:<?php echo $pt['pincode'];?> </li>
                                                          <li>CONTACT:<?php echo $pt['phone_number'];?> </li>
                                       
                                    </ul>
                                </div><!-- end body -->
                                <div >
                                   
                                </div><!-- end footer -->
                            </div><!-- end pricing-table -->
                        </div><!-- end col --> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h3>SHOW</h3>
                                </div><!-- end header -->
                                <div class="pricing-table-body">
                                    <div class="pricing-price">
                                        
                                    </div>
                                    <ul>
                                        <li><b>NAME:</b><?php echo $lp['showname'];?> </li>
                                            <li><b>START TIME:</b><?php echo $lp['timefrom'];?> </li>
                                                <li><b>END TIME:</b><?php echo $lp['timeto'];?> </li>
                                                 <li><b>START DATE:</b><?php echo $dt['datefrom'];?> </li>
                                                  <li><b>END DATE:</b><?php echo $dt['dateto'];?> </li>
                                                  
                                       
                                    </ul>
                                </div><!-- end body -->
                                <div >
                                   
                                </div><!-- end footer -->
                            </div><!-- end pricing-table -->
                        </div><!-- end col --> 
                        

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h3>screen</h3>
                                </div><!-- end header -->
                                <div class="pricing-table-body">
                                    <div class="pricing-price">
                                       
                                    </div>
                                    <ul>
                                       <li><b>NAME:</b><?php echo $lp1['screenname'];?> </li>
                                            <li><b>START TIME:</b><?php echo $lp1['sctype'];?> </li>
                                                <li><b>TOTTAL SEAT:</b><?php echo $lp1['seats'];?> </li>
                                                 <li><b>AMOUNT/SEAT:</b><?php echo $lp1['amount'];?> </li>
                                                 
                                                  
                                        
                                    </ul>
                                </div><!-- end body -->
                                <div >
                                
                                  
                                </div><!-- end footer -->
                            </div><!-- end pricing-table -->
                        </div><!-- end col --> 

                    </div><!-- end row -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
            </div><!-- end row -->
            
        </div><!-- end container -->
      <br />
      <br />
                <div id="fullwidth" class="col-sm-12">
              <center>   <a href="#"  data-toggle="modal" data-value="<?php echo $_REQUEST['id'];?>" data-target="#modal_add_screen" class="btn btn-default btn-rounded btn-condensed btn-sm addscreencat"><i class="fa fa-plus"></i>ADD SEAT</a> <br /><br />
                </center>
                </div>
                </div>
    </section><!-- end section -->

 <div class="modal animated fadeIn" id="modal_add_screen" name="modal_add_screen" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">
                        Add Seat</h4>
                    </div>                    
                    <form  method="get" action="users/pages-login.php" >
                    <div class="modal-body form-horizontal form-group-separated">
                        <div class="form-group">
                            <label class="col-md-4 control-label">ADD SEAT</label>
                            <div class="col-md-4">
                               <input type="text" name="nseat" id="nseat" placeholder="Number of Seat" required=""/>
                              
                           
                              
                                  
                                </div>                            
                        </div>                        
                    </div>                 
                     
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="id" name="id" value="<?php echo $_REQUEST['id'];?>">Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

    <!-- Template core JavaScript's
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/circle.js"></script>
    <script src="js/progress.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/custom.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/revslider.js"></script>
    
   
<?php include("footer.php"); ?>
</body>

<!-- Mirrored from trendingtemplates.com/demos/trips/shortcodes-pricing-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2015 05:28:03 GMT -->
</html>