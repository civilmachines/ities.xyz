<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<!--        <title>ITIES : Indian Technical Incubation of Entrepreneurs Society</title>-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ITIES : Indian Technical Incubation of Entrepreneurs Society">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic%7CRoboto+Slab:400,700">
        <!--http://bogdanpreda.com/themes/tf-14-landing/#-->
        <!--stylesheets-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" >
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/fractionslider.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!--[if lt IE 9]>
                        <link rel="stylesheet" type="text/css" href="css/ie.css" />
                <![endif]-->
        <!--<link rel="icon" type="image/x-icon" href="images/favicon.ico" />-->

        <!-- html5.js -->
        <!--[if lt IE 9]>
                        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
        <script src="js/jquery-1.9.0.min.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
        <div class="headerblock"> 
            <div class="logoblock">
                <div class="container">
                    <div class="paddingcnt"> <a href="index.php?pages=home" class="logo"><img src="images/logo.png" alt="ITIES"></a>
                        <nav class="navbar navbar-inverse"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                            <div class="nav-collapse">
                                <ul class="nav">
                                    <li class="current"><a href="index.php#home">Home</a></li>
                                    <li><a href="index.php#services">Services</a></li>
                                    <li><a href="index.php#mission">Our Mission</a></li>
                                    <li><a href="index.php#member">Membership</a></li>
                                    <li><a href="index.php#about">Support us</a></li>
                                    <li><a href="index.php#aboutities">About ITIES</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_GET['pages'])) {
            $page_name = $_GET['pages'];
            include("pages/" . $page_name . ".php");
        } else {
            include("pages/home.php");
        }
        ?>

        <div class="footer">
            <div class="container footertext">
                <div class="row-fluid">
                    <div class="span6 text-left">&copy; 2015 <span class="orange">ITIES</span> - All rights reserved</div>
                    <div class="span6 text-right">Social Like icon</div>
                </div>
            </div>
            <div class="bg"></div>
        </div>

        <!---------------------------- modal section ------------------------------------------->

        <div class="side-menu-register">
            <a href="#myModal" data-toggle="modal">Register Now!</a>
        </div>


        <div id="myModal" class="modal hide fade login-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <ul class="nav nav-tabs">
                    <li class="active current"><a href="#register" data-toggle="tab"><i class="icon-user"></i> Register</a></li>
                    <li><a href="#login" data-toggle="tab"><i class="icon-lock"></i> Login</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="register">
                        <div class="row-fluid">
                            <div class="span6">
                                <span class="step">Step 1</span>

                                <div class="btnp"><a href="#mem-register" data-toggle="modal" class="btn btn-large btn-primary"  data-dismiss="modal" aria-hidden="true">Free Membership Registration</a>
                                </div>
                            </div>
                            <div class="span6">
                                <span class="step">Step 2</span> 
                                <div class="btnp"><a href="#e-courses" data-toggle="modal" class="btn btn-large btn-success" data-dismiss="modal" aria-hidden="true">E-Courses/Certification Portal </a>
                                </div></div>
                        </div>
                    </div>


                    <div class="tab-pane" id="login">
                        <div class="row-fluid">
                            <div class="span6">
                                <span class="step">&nbsp;</span>
                                <div class="btnp"><a href="http://eventhaat.com/log-in" target="_blank" class="btn btn-large btn-primary"> Members Events Area </a>
                                </div>
                            </div>
                            <div class="span6">
                                <span class="step">&nbsp;</span>
                                <div class="btn btn-large btn-success btnp">E-Courses/Certification
                                </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mem-register" class="modal hide fade login-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <br>
            <div class="title">
                <h4>Free Membership Registration</h4>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="register">
                        <div class="row-fluid">
                            <div class="span12">
                                <p>Follow these steps to become a member of ITIES and access all other services or products of ITIES.</p>
                                <div class="alert alert-block">
                                    Please note you must be a Free Member of ITIES before accessing any other service or product of ITIES!
                                </div>

                                <ol>
                                    <li><a href="http://eventhaat.com/log-in" target="_blank"> Login to EventHaat.com!</a> If you’re not already registered, first <a href="http://eventhaat.com/profile-menu/profile?view=registration" target="_blank">register on EventHaat.com</a> and then LogIn. </li>
                                    <li>Go to <a href="http://eventhaat.com/event/community/ities" target="_blank"> ITIES: Free Membership Event</a> while you’re logged in (it is compulsory to be logged in or you’ll see “Registration CLOSED For This Event” message).</li>
                                    <li>Register yourself to the event.</li>
                                    <li>That’s it! You’re done. Wait upto 24 hours and then login to <a href="http://eventhaat.com/log-in" target="_blank">EventHaat.com</a> and you will be able to access all the services, events and products offered by ITIES.</li>
                                </ol> 
                                <a href="#" class="btn btn-large btn-danger offset3" type="button" data-dismiss="modal" aria-hidden="true">Cancel</a>
                                <a href="http://eventhaat.com/profile-menu/profile?view=registration" target="_blank" class="btn btn-large btn-primary" type="button">Register Now!</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="e-courses" class="modal hide fade login-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <br>
            <div class="title">
                <h4>E-Courses /Certification Portal</h4>

            </div>
            <div class="modal-body">
                <!--<div class="tab-content">
                  <div class="tab-pane active" id="register">
                 <div class="row-fluid">
                 <div class="span12">
                <p>Follow these steps if you want to access ITIES E­Courses/Certification Platform.</p>
                <div class="alert alert-block">
                  Please note you must be already a Free Member of ITIES before accessing this platform.
                </div>
                
                <ol>
                <li>Go to <a href="#">E­-Courses Registration Form.</a></li>
                <li>Fill up the form using same E-Mail ID that you used to become Free Member of ITIES.</li>
                <li>Wait 12 hours while ITIES Admin Panel verify that you are already a member of ITIES.</li>
                <li>We’ll notify you by E-Mail and then you can login to E-Courses/Certification Platform of ITIES.</li>
                </ol> 
                <a href="#" class="btn btn-large btn-danger offset3" type="button" data-dismiss="modal" aria-hidden="true">Cancel</a>
                <a href="#" class="btn btn-large btn-primary" type="button">Register Now!</a>
                 </div>
                  
                 </div>
                  </div>
                </div>-->
                <img src="images/coming-soon.jpg">
            </div>


        </div>


        <div id="contact" class="modal hide fade contact-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5>Contact Support Team</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Name *</label>
                    <input type="text" name="Name1" placeholder="Enter name" class="form-control" required="">
                    <label class="control-label">Email Address *</label>
                    <input type="email" name="Email1" placeholder="Enter email address" class="form-control" required="">
                    <label class="control-label">Message *</label>
                    <textarea id="inputContent" rows="3" name="Meassage1" class="form-control" placeholder="Your message"></textarea>
                </div>
            </div>
            <div class="modal-footer" style="text-align: left !important;">
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="loading">Cancel</button>
            </div>
        </div>

        <!--js--> 

<!--        <script type="text/javascript" src="js/jquery.easing.min.js"></script> -->

        <script type="text/javascript" src="js/jquery.nav.js"></script> 
        <script type="text/javascript" src="js/jquery.flexslider.js"></script> 
        <script type="text/javascript" src="js/jquery.fractionslider.js"></script> 
        <script src="typer/js/jquery.typer.js"></script> 
        <script src="typer/js/scripts.js"></script> 
        <script type="text/javascript">

            jQuery(function() {
                $('#myTab a:last').tab('show');
            })
            /* <![CDATA[ */
            jQuery(function($) {

                $("#submit").click(function() {

                    var cname = $("#name").val();
                    var cemail = $("#email").val();
                    var cmesg = $("#message").val();
                    //var csub1 = $("#subject1").val();

                    var errcount = 0;
                    if (cname.length < 1)
                    {
                        $("#name").addClass("error");
                        errcount = 1;
                    } else
                        $("#name").removeClass("error");
                    //email validation
                    var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
                    var valid = emailRegex.test(cemail);
                    if (!valid) {
                        $("#email").addClass("error");
                        errcount = 1;
                    } else
                        $("#email").removeClass("error");


                    if (cmesg.length < 1)
                    {
                        $("#message").addClass("error");
                        errcount = 1;
                    } else
                        $("#message").removeClass("error");

                    if (errcount == 0)
                    {
                        $.ajax({
                            type: "POST",
                            url: "form.php",
                            data: 'message=' + cmesg + '&name=' + cname + '&email=' + cemail,
                            dataType: "html",
                            success: function(msg) {

                                $('#name').val('');
                                $('#email').val('');
                                $('#message').val('');
                                $('#subject').val('');
                                $('#contact_form_new').append("<p class='sentsucc'>Thank you!! We will contact you shortly.</p>");
                                setTimeout(function() {
                                    if ($('.sentsucc').length > 0) {
                                        $('.sentsucc').remove();
                                    }
                                }, 5000)
                            }
                        });

                        return false;
                    }
                    else
                    {
                        return false;
                    }
                });

                $('.nav').onePageNav({scrollOffset: 72});

                $(window).resize(function() {

//                    var top = $('#home').offset().top;
//                    var cmsimg = $('.cmsimg').offset().top;
                    var cmstitle = $('.cmstitle').offset().top;
//                    var featureabs = $('.featureabs').offset().top;
                    var featuretitle1 = $('.featuretitle1').offset().top;

                    $(window).scroll(function() {
                        var y = $(this).scrollTop();

                        if ((y >= cmstitle)) {
                            $('.cmsimg').addClass('cmsimgr');
                        }

                        if (y >= featuretitle1) {
                            $('.featureabs').addClass('featureabsl');
                        }

                    });

                    if ($(this).width() < 980)
                    {
                        $("nav li a").click(function() {
                            $(".nav-collapse").css("height", "0px");
                            $(".nav-collapse").removeClass("in");
                        });
                    }

                    var sliderpadding = $('.headerblock').height();
                    $('.homeslider').css('paddingTop', sliderpadding);

                    var featheight = $('.featureabs img').height();
                    var featuresetblocktext = $('.featuresetblocktext').height();

                    if (featuresetblocktext > featheight)
                        $('.featureblock1').css('height', 'auto');
                    else
                        $('.featureblock1').css('height', featheight);

                    var cmsimgheight = $('.cmsimg img').height();
                    var cmsleftheight = $('.cmsleft').height();

                    if (cmsleftheight > cmsimgheight)
                        $('.cms').css('height', 'auto');
                    else
                    {
                        $('.cms').css('height', cmsimgheight);
                    }

                    var imgheight = $('.frame').height();
                    var imgwidth = $('.frame').width();
                    var imgheight1 = imgheight / 2;
                    var imgwidth1 = (imgwidth) / 4;
                    $('.flexslider .slides li').css('height', imgheight);
                    $('.clientmain').css('width', imgwidth1);
                    $('.clientmain').css('height', imgheight1);
                });
                $(window).resize();

            });

            $(window).load(function() {
                $('.slider').fractionSlider({
                    'fullWidth': false,
                    'controls': true,
                    'pager': false,
                    'responsive': true,
                    'dimensions': '1600, 720',
                });

                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    directionNav: false,
                    start: function(slider) {
                        $('body').removeClass('loading');
                        $(window).resize();
                    }
                });
            });
            /* ]]> */
        </script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SRM GPA AD -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9347698199963124"
     data-ad-slot="4556466895"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </body>
</html>