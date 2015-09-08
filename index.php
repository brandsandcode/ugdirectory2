<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom-style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Uganda Directory</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#directory" onclick = $("#menu-close").click(); >Directory</a>
            </li>
            <li>
                <a href="#info_guide" onclick = $("#menu-close").click(); >Info Guide</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1 style="color: #FFF">Uganda's number one business directory</h1>
            <br>

           <div class="col-lg-6 center-block" style="margin-left: 25%;">
               <!-- Jssor Slider Begin -->
               <!-- To move inline styles to css file/block, please specify a class name for each element. -->
               <!-- ================================================== -->
               <div id="slider1_container" style="display: none; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

                   <!-- Loading Screen -->
                   <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                       <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                       </div>
                       <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                       </div>
                   </div>

                   <!-- Slides Container -->
                   <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                       <div>
                           <img u="image" src2="img/01.jpg" />
                       </div>
                       <div>
                           <img u="image" src2="img/02.jpg" />
                       </div>
                       <div>
                           <img u="image" src2="img/03.jpg" />
                       </div>
                       <div>
                           <img u="image" src2="img/04.jpg" />
                       </div>
                   </div>

                   <!--#region Bullet Navigator Skin Begin -->
                   <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                   <style>
                       /* jssor slider bullet navigator skin 05 css */
                       /*
                       .jssorb05 div           (normal)
                       .jssorb05 div:hover     (normal mouseover)
                       .jssorb05 .av           (active)
                       .jssorb05 .av:hover     (active mouseover)
                       .jssorb05 .dn           (mousedown)
                       */
                       .jssorb05 {
                           position: absolute;
                       }
                       .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                           position: absolute;
                           /* size of bullet elment */
                           width: 16px;
                           height: 16px;
                           background: url(img/b05.png) no-repeat;
                           overflow: hidden;
                           cursor: pointer;
                       }
                       .jssorb05 div { background-position: -7px -7px; }
                       .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                       .jssorb05 .av { background-position: -67px -7px; }
                       .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
                   </style>
                   <!-- bullet navigator container -->
                   <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                       <!-- bullet navigator item prototype -->
                       <div u="prototype"></div>
                   </div>
                   <!--#endregion Bullet Navigator Skin End -->

                   <!--#region Arrow Navigator Skin Begin -->
                   <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
                   <style>
                       /* jssor slider arrow navigator skin 11 css */
                       /*
                       .jssora11l                  (normal)
                       .jssora11r                  (normal)
                       .jssora11l:hover            (normal mouseover)
                       .jssora11r:hover            (normal mouseover)
                       .jssora11l.jssora11ldn      (mousedown)
                       .jssora11r.jssora11rdn      (mousedown)
                       */
                       .jssora11l, .jssora11r {
                           display: block;
                           position: absolute;
                           /* size of arrow element */
                           width: 37px;
                           height: 37px;
                           cursor: pointer;
                           background: url(img/a11.png) no-repeat;
                           overflow: hidden;
                       }
                       .jssora11l { background-position: -11px -41px; }
                       .jssora11r { background-position: -71px -41px; }
                       .jssora11l:hover { background-position: -131px -41px; }
                       .jssora11r:hover { background-position: -191px -41px; }
                       .jssora11l.jssora11ldn { background-position: -251px -41px; }
                       .jssora11r.jssora11rdn { background-position: -311px -41px; }
                   </style>
                   <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
                   <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
                   <!--#endregion Arrow Navigator Skin End -->
                   <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
               </div>
               <!-- Jssor Slider End -->
           </div> <!--end of div containing slider-->

            <div class="row col-lg-12" style="margin-top: 20px;">
                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="company">Company</label>
                        <input type="email" class="form-control input-lg" id="company" placeholder="Service/Company">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="location">Location</label>
                        <input type="password" class="form-control input-lg" id="location" placeholder="Location">
                    </div>
                    <button type="submit" class="btn btn-default input-lg"><span class="fa fa-search fa-lg" aria-hidden="true"></span></button>
                </form> <br >
                <div class="row">
                    <a href="#info_guide" type="button" class="btn btn-default" style="margin-right: 10%">Info Guide</a>
                    <a href="adbus.php" type="button" class="btn btn-default" style="margin-left: 10%">Add Business</a>
                    </div>
                </div> <!--end of div with form-->

        </div>
    </header>

    <!-- About -->
    <section id="directory" class="directory" style="padding-top: 100px;">
        <nav class="navbar navbar-inverse" id="pin1">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index#top"><img src="img/logo.png" height="50px" style="margin-right: 10px;"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left: 15%;">
                    <ul class="nav navbar-nav">
                        <li id="nav_directory"><a href="#directory">Directory <span class="sr-only">(current)</span></a></li>
                        <li id="nav_infoguide"><a href="#info_guide">Info Guide</a></li>
                        <li id="nav_contact"><a href="#contact">Contact</a></li>
                    </ul>
                    <!--<form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>-->
                    <a type="button" class="btn btn-danger navbar-btn navbar-right" style="margin-right: 20%">add business</a>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="row center-block">
                <div class="col-md-10 text-center center-block" style="margin-left: 8%;">
                    <!--<h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                    <p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>-->
                    <p class="lead pull-left">the directory</p>
                    <form class="pull-right form-inline" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="search service/company">
                        </div>
                    </form> <!--end of directoy search-->
                </div>
            </div>
            <div id="trigger1" class="spacer s0"></div>

            <!-- /.row -->
            <div class="row col-lg-10 center-block" style="margin-left: 8%;">
                <table class="table table-responsive table-bordered center-block text-center text-danger col-md-10">
                    <tbody>
                    <tr>
                        <td><a href=""><img src="img/icons/png%20icons_accomodation.png" height="100" width="100"><br> Accomodation</a></td>
                        <td><a href=""><img src="img/icons/png%20icons_agriculture.png" height="100" width="100"><br> Agriculture</a></td>
                        <td><a href=""><img src="img/icons/png%20icons_accounting%20and%20audit.png" height="100" width="100"><br> Accounting</a></td>
                        <td><a href=""><img src="img/icons/png%20icons_automotive%20and%20spare%20parts.png" height="100" width="100"><br> Automotives</a></td>
                        <td><a href=""><img src="img/icons/png%20icons_sports.png" height="100" width="100"><br> Sports</a></td>
                    </tr>
                    <tr>
                        <td><a href=""><img src="img/icons/png%20icons_banking%20and%20finance.png" height="80" width="80"><br> Banking</a></td>
                        <td><a href=""><img src="img/icons/png%20icons_business.png" height="100" width="100"><br> Business</a></td>
                        <td><a href=""><img src="img/icons/png%20icons_building%20.png" height="100" width="100"><br> Building</a></td>
                        <td><a href=""><img src="img/icons/png%20icons_communication%20.png" height="100" width="100"><br> Communication</a></td>
                        <td><a href=""><img src="img/icons/png%20icons_logistics.png" height="100" width="100"><br> Logistics</a></td>
                    </tr>
                    <tr>
                        <td><a href=""><img src="img/icons/png%20icons_construction%20and%20civil%20works.png" height="80" width="80"><br> Accomodation</a></td>
                        <td><img src="img/icons/png%20icons_computers%20and%20tech.png" height="100" width="100"></td>
                        <td><img src="img/icons/png%20icons_entertainment.png" height="100" width="100"></td>
                        <td><img src="img/icons/png%20icons_education%20and%20learning.png" height="100" width="100"></td>
                        <td><img src="img/icons/png%20icons_social%20development.png" height="100" width="100"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <div id="trigger2" class="spacer s0"></div>
    <script>
        // init controller
        var controller = new ScrollMagic.Controller();
    </script>
    <script>
        // init controller
        var controller2 = new ScrollMagic.Controller();
    </script>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="info_guide" class="info_guide" style="padding-top: 100px;">
        <div class="container">
            <div class="row center-block">
                <div class="col-md-10 text-center center-block" style="margin-left: 8%;">
                    <!--<h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                    <p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>-->
                    <p class="lead pull-left">info guide</p>
                    <form class="pull-right form-inline" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="search service/company">
                        </div>
                    </form> <!--end of directoy search-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center padding-spaced orange">Keep your self informed about...</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center padding-spaced">
                    <img src="img/person.png" alt="advert here" class="img-rounded text-center"/>
                    <a href="forex.php"><p class="text-center padding-spaced">Forex</p></a>
                </div>
                <div class="col-md-3 text-center padding-spaced">
                    <img src="img/person.png" alt="advert here" class="img-rounded"/>
                    <a href="business.php"><p class="text-center padding-spaced">Business</p></a>
                </div>
                <div class="col-md-3 text-center padding-spaced">
                    <img src="img/person.png" alt="advert here" class="img-rounded"/>
                    <a href="tourandtravel.php"><p class="text-center padding-spaced">Tours and Travel</p></a>
                </div>
                <div class="col-md-3 text-center padding-spaced">
                    <img src="img/person.png" alt="advert here" class="img-rounded"/>
                    <a href="events.php"><p class="text-center padding-spaced">Events</p></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 whitesmoke-back pointed-div-hover">
                    <p class="text-center">dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco read more</p>
                </div>
                <div class="col-md-3 whitesmoke-back pointed-div-hover">
                    <p class="text-center">dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco read more</p>
                </div>
                <div class="col-md-3 whitesmoke-back pointed-div-hover">
                    <p class="text-center">dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco read more</p>
                </div>
                <div class="col-md-3 whitesmoke-back pointed-div-hover">
                    <p class="text-center">dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco read more</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <!-- Portfolio -->
    <section id="contact" class="contact" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Contact us</h2>
                    <div id="trigger3" class="spacer s0"></div>
                    <hr class="small">
                    <div class="row">
                       <div class="col-md-6 pull-left">
                           <!--address-->
                           <p class="text-left">
                               Welcome to the number one business directory in Uganda. Whether you are new to us or a long standing
                               customer, there are plenty of ways to get in touch...
                           </p>
                           <address class="text-left">
                               <strong>Phone.</strong><br>
                               To advertise with us call +256 322 200 612 and ask <br >
                               to speak to the business team. <br>
                               General Enquiries (mobile phone): +250 703 987 982 / <br >
                                +256 456-7890
                           </address>

                           <address class="text-left">
                               <strong>Email</strong><br>
                               General enquiries
                               <a href="mailto:#">samantha@ugandadirectory.com</a> <br>
                               Technical Problems:
                               <a href="mailto:#">info@ugandadirectory.com</a>
                           </address>
                           <address class="text-left">
                               Plot 38-42, Pilkington Road, Kampala Uganda <br>
                               Office hours:<br>
                               9:00am-5:00pm (Monday-Thursday)
                               9:00am-4:00pm (Friday)
                           </address>
                       </div>
                        <div class="col-md-6 pull-right">
                            <!--form-->
                            <h4 class="text-danger">Please fill out the form below to contact us</h4>
                            <form >
                                <div class="form-group">
                                    <input type="text" class="form-control" id="cname" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="csubject" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="cemail" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                    </div>
                                <button type="submit" class="btn btn-success pull-left">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Footer -->
    <footer style=" height: 50px; padding: 0; margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center">
                    <ul class="list-inline pull-left">
                        <li>
                            <a href="#contact">Contact us</a>
                        </li>
                        <li>
                            <a href="">Terms and Conditions</a>
                        </li>
                        <li>
                            Follow us on:
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                        </li>
                    </ul>
<!--                    <hr class="small">-->
                    <p class="text-muted pull-right" style="color: #ffffff;">Copyright &copy; Uganda Directory 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!--jssor slider script -->
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <!--info guide script-->
    <script type="application/javascript">
        $(document).ready(function(){
            $(".pointed-div-hover").hover(function(){
                $(this).removeClass("whitesmoke-back");
                $(this).addClass("orange-back");
            },function(){
                $(this).removeClass("orange-back");
                $(this).addClass("whitesmoke-back");
            });
        });
    </script>

    <!--jquery scroll magin-->
    <script src="js/ScrollMagic.min.js" ></script>
    <script src="js/plugins/debug.addIndicators.js"></script>
    <script>
        // init controller
        var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 1690}});
        var controller2 = new ScrollMagic.Controller({globalSceneOptions: {duration: 390}});

        // build scenes
        new ScrollMagic.Scene({triggerElement: "#trigger1"})
                .setClassToggle("#pin1", "navbar-fixed-top") // add class toggle
//                .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
        new ScrollMagic.Scene({triggerElement: "#trigger2"})
                .setClassToggle("#nav_infoguide", "active") // add class toggle
//                .addIndicators() // add indicators (requires plugin)
                .addTo(controller2);
        new ScrollMagic.Scene({triggerElement: "#trigger3"})
                .setClassToggle("#nav_contact", "active") // add class toggle
//                .addIndicators() // add indicators (requires plugin)
                .addTo(controller2);
        new ScrollMagic.Scene({triggerElement: "#sec3"})
                .setClassToggle("#high3", "active") // add class toggle
//                .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
        new ScrollMagic.Scene({triggerElement: "#trigger1"})
                .setClassToggle("#nav_directory", "active") // add class toggle
//                .addIndicators() // add indicators (requires plugin)
                .addTo(controller2);
    </script>

</body>

</html>
