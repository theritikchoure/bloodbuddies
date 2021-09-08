<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Blood Buddies - Blood Donation Campaign & Multi-Concept Activism Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <!-- The styles -->

    
    <link rel="stylesheet" href="/front/css/bootstrap.min.css" />
    <link href="/front/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/front/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/front/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/front/css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/front/css/styles.css" />

    <link rel="stylesheet" href="/css/donor/style.css">

    <style>
        /* Hide the file input using opacity */
        
        [type=file] {
            position: absolute;
            filter: alpha(opacity=0);
            opacity: 0;
        }
        input, [type=file] + label {
            border: 1px solid #CCC;
            /* border-radius: 3px; */
            text-align: left;
            padding: 3px;
            width: 100%;
            margin: 0;
            left: 0;
            position: relative;
        }
        
        [type=file] + label {
            text-align: center;
            /* Decorative */
            background: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        [type=file] + label:hover {
        background: #ef3d32;
        }
    </style>

    <body>

        <div id="preloader">
            <span class="margin-bottom"><img src="/front/images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix" data-sticky_header="true">

            

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="{{route('home')}}"><img alt="" src="/front/images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">

                                <li><a href="{{route('home')}}" title="Home">Home</a></li>
                                <li><a href="/#about-us" title="About Us">About Us</a></li>
                                <li><a href="/#facts" title="Facts">Facts</a></li>
                                <li><a href="/#milestones" title="Milestones">Milestones</a></li>
                                @if(session()->has('LoggedDonor'))
                                <li><a href="/donor/dashboard" >Dashboard</a></li>
                                <li><a href="/donor/logout" >Logout</a></li>
                                @else
                                <li><a href="{{route('donate')}}">Become Donor</a></li>
                                <li><a href="/#request">Request for Blood</a></li>
                                @endif
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header>
        <!-- end main-header  -->

        <!-- Main Section -->

        @section('section')
            
        @show

        <!-- End Main Section -->

        <!-- START FOOTER  -->

        <footer>

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="">

                                <div class="row">

                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <img src="/front/images/logo-footer.png" alt="" />
                                    </div>
                                    <!--  end col-lg-3-->

                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood. We are working all over the world, organizing blood donation campaign to grow awareness among the people
                                            to donate blood.
                                        </p>
                                    </div>
                                    <!--  end .col-lg-9  -->

                                </div>
                                <!--  end .row -->

                            </div>
                            <!--  end .about-footer  -->

                        </div>
                        <!--  end .col-md-12  -->

                    </div>
                    <!--  end .row  -->


                </div>
                <!-- end .container  -->

            </section>
            <!--  end .footer-widget-area  -->

            <!--FOOTER CONTENT  -->

            <section class="footer-contents">

                <div class="container">

                    <div class="row clearfix">

                        <div class="col-md-12 col-sm-12 text-center">
                            <p class="copyright-text"> Copyright {{date('Y')}} - Blood Buddies by BlueWindLab. All Rights Reserved. </p>
                            
                                @if(session()->has('LoggedDonor'))
                                
                                @else
                                <a href="/donor/login" >Donor Login</a>
                                @endif
                            
                        </div>
                        <!-- end .col-sm-6  -->

                    </div>
                    <!-- end .row  -->

                </div>
                <!--  end .container  -->

            </section>
            <!--  end .footer-content  -->

        </footer>

        <!-- END FOOTER  -->

        <!-- Back To Top Button  -->

        <a id="backTop"><i class="fa fa-up-arrow"> Back To Top</i></a>

        <script src="/front/js/jquery.min.js"></script>
        <script src="/front/js/bootstrap.min.js"></script>
        <script src="/front/js/wow.min.js"></script>
        <script src="/front/js/jquery.backTop.min.js "></script>
        <script src="/front/js/waypoints.min.js"></script>
        <script src="/front/js/waypoints-sticky.min.js"></script>
        <script src="/front/js/owl.carousel.min.js"></script>
        <script src="/front/js/jquery.stellar.min.js"></script>
        <script src="/front/js/jquery.counterup.min.js"></script>
        <script src="/front/js/venobox.min.js"></script>
        <script src="/front/js/custom-scripts.js"></script>
    </body>

</html>