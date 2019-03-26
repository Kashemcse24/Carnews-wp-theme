<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- title of site -->
    <title>Home page</title>

    <!-- google fonts-->
    <link href="<?php echo get_template_directory_uri();?>/https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
   
    <!--flaticon.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/flaticon.css">

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.min.css">

    <!--text-animation.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">

    <!--animate.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/text-animation.css">
    
    <!--fancybox.min.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/jquery.fancybox.min.css">
    
    <!--fancybox.min.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.min.css">
    
    <!--owl.carousel.min.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
    
    <!--slider revolution css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/rs-plugin/css/layers.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/rs-plugin/css/settings.css" type="text/css"/>
    
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">

    <!--plugins.css-->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/plugins.css" rel="stylesheet">

    <!--icons.css-->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/icons.css" rel="stylesheet">
    
    <!--menu-css.css-->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/menu-css.css" rel="stylesheet">

    <!--style.css-->
    <link rel="<?php echo get_template_directory_uri();?>/stylesheet" href="assets/css/main.css">
    
    <!--responsive.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
<?php wp_head();?>	
</head>
<body>

  <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div> 
    <!--End Preloader-->

    <header id="header" class="header_areaa">
        <nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">
                    <div class="navbar-collapse collapse align-left">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo "index.php";?>">Home</a>
                            </li>

                            <li><a href="<?php echo "about-us-page.php";?>">About</a></li>

                            <li><a href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page-404.html">404</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio-two-column.html">Portfolio 2 Column</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-sidebar-page.html">Blog Sidebar Page</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-page.html">Contacts  </a></li>        
                        </ul>
                    </div>
                    <div class="navbar-other">
                        <div class="align-right text-right">
                            <div class="navbar-brand">
								<a href="index-01.html"><img alt="images" src="<?php echo get_template_directory_uri();?>/images/logo_consult.png"></a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- /header -->
    
            
    <div id="home_default_rev_slider_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="focus-parallax" data-source="gallery" style="background-color:transparent;padding:0px;">
        <div id="home_default" class="rev_slider fullscreenbanner" style="display:none;">
            <ul>
                <li data-index="digital_slide_1" data-transition="crossfade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-rotate="0"  data-saveperformance="off"  data-title="Focus">

                    <img src="<?php echo get_template_directory_uri();?>/images/slider_img_01.jpg" alt="images"  data-lazyload="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                    <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-1" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['-100','-80','-60','-50']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6;font-size: 85px; white-space: nowrap;text-transform:left;color: #000;font-family: 'Montserrat', sans-serif;font-weight: 700;">Don't  
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-2" 
                        data-x="['left','left','left','left']" data-hoffset="['270','260','200','170']" 
                        data-y="['center','center','center','center']" data-voffset="['-100','-80','-60','-50']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6;font-size: 85px; white-space: nowrap;text-transform:left;color: #008cb5;font-family: 'Montserrat', sans-serif;font-weight: 700;">Wait 
                    </div>

                    <div class="tp-caption  tp-resizeme" 
                        id="slide-1-layer-3" 
                        data-x="['left','left','left','left']" data-hoffset="['500','440','330','280']" 
                        data-y="['center','center','center','center']" data-voffset="['-100','-80','-60','-50']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6;font-size: 85px; white-space: nowrap;text-transform:left;color: #000;font-family: 'Montserrat', sans-serif;font-weight: 700;">For 
                    </div>  

                    <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-4" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6; white-space: nowrap;text-transform:left;color: #000000;font-family: 'Montserrat', sans-serif;font-weight: 700;">Opportunity 
                    </div>

                     <div class="tp-caption rev-btn " 
                        id="slide-1-layer-5" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['110','90','70','60']"
                        data-fontsize="['18','15','14','13']" 
                        data-lineheight="['18','15','14','13']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button" 
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                        data-responsive_offset="on" 
                        data-responsive="on"
                        data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'  
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[14,13,12,12]" 
                        data-paddingright="[30,30,25,20]" 
                        data-paddingbottom="[14,12,13,12]" 
                        data-paddingleft="[30,30,25,20]" 
                        style="z-index: 8; white-space: nowrap; font-size: 18px; line-height: 15px; font-weight: 600; color: #fff;font-family: 'Montserrat', sans-serif;font-weight: 600;background-color:#008cb5;border-color:#008cb5;border-style:solid;border-width:1px;border-radius:30px 30px 30px 30px;letter-spacing:1px;">Read More 
                    </div>
                </li>

                <li data-index="digital_slide_2" data-transition="crossfade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-rotate="0"  data-saveperformance="off"  data-title="Focus">

                    <img src="<?php echo get_template_directory_uri();?>/images/slider_img_02.jpg" alt="images"  data-lazyload="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                    <div class="tp-caption  tp-resizeme" 
                        id="slide-2-layer-1" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['-100','-80','-60','-50']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6;font-size: 85px; white-space: nowrap;text-transform:left;color: #000;font-family: 'Montserrat', sans-serif;font-weight: 700;">Positive
                    </div>
                    
                     <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-2" 
                        data-x="['left','left','left','left']" data-hoffset="['360','345','260','220']" 
                        data-y="['center','center','center','center']" data-voffset="['-100','-80','-60','-50']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6;font-size: 85px; white-space: nowrap;text-transform:left;color: #008cb5;font-family: 'Montserrat', sans-serif;font-weight: 700;">Thinking 
                    </div>

                    <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-3" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
                        data-fontsize="['85','70','50','40']" 
                        data-lineheight="['85','70','50','50']" 
                        data-width="none" 
                        data-height="none" 
                        data-whitespace="nowrap" 
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[0,0,0,0]" 
                        data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" 
                        data-paddingleft="[0,0,0,0]" 
                        style="z-index: 6; white-space: nowrap;text-transform:left;color: #000000;font-family: 'Montserrat', sans-serif;font-weight: 700;">Breeds Success
                    </div>

                     <div class="tp-caption rev-btn " 
                        id="slide-2-layer-4" 
                        data-x="['left','left','left','left']" data-hoffset="['0','50','50','50']" 
                        data-y="['center','center','center','center']" data-voffset="['110','90','70','60']"
                        data-fontsize="['18','15','14','13']" 
                        data-lineheight="['18','15','14','13']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button" 
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                        data-responsive_offset="on" 
                        data-responsive="on"
                        data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'  
                        data-textAlign="['left','left','left','left']" 
                        data-paddingtop="[14,13,12,12]" 
                        data-paddingright="[30,30,25,20]" 
                        data-paddingbottom="[14,12,13,12]" 
                        data-paddingleft="[30,30,25,20]" 
                        style="z-index: 8; white-space: nowrap; font-size: 18px; line-height: 15px; font-weight: 600; color: #fff;font-family: 'Montserrat', sans-serif;font-weight: 600;background-color:#008cb5;border-color:#008cb5;border-style:solid;border-width:1px;border-radius:30px 30px 30px 30px;letter-spacing:1px;">Read More 
                    </div>
                </li> 
            </ul>
        </div>
    </div><!-- END REVOLUTION SLIDER -->