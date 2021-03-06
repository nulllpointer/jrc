<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/construcdo/constructo/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 04:53:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JR Consultant | Civil Engineering Consultancy</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- rippler css -->
    <link rel="stylesheet" href="css/rippler.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="slick/slick.css">
    <!-- jquery magnifiq popup  -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- reset css -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive Css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="js">
<div id="preloader"></div>
<div class="searchboxinput">
    <form action="http://www.kazierfan.com/themes/construcdo/constructo/index.html">
        <div class="single-input-searchbox">
            <input type="text" placeholder="Search Here....">
            <button class="fa fa-search"></button>
        </div>
    </form>
</div>
<!-- start nav and topbar area -->
<div class="constructo-navtop-area">
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <ul class="topaddres">
                        <li><span class="fa fa-phone"></span> {{$aboutus[0]->mobile}}</li>
                        <li><span class="fa fa-envelope"></span>{{$aboutus[0]->email}}</li>
                    </ul>
                </div>
                {{--  <div class="col-sm-6 text-right">
                      <div class="social-link">
                          <a href="#" class="fa fa-facebook"></a>
                          <a href="#" class="fa fa-twitter"></a>
                          <a href="#" class="fa fa-google"></a>
                          <a href="#" class="fa fa-pinterest"></a>
                          <a href="#" class="fa fa-dribbble"></a>
                          <a href="#" class="fa fa-vine"></a>
                          <a href="#" class="fa fa-linkedin"></a>
                          <a href="#" class="fa fa-rss"></a>
                      </div>
                  </div>--}}
            </div>
        </div>
    </div>
    <div class="constructo-menu-area">
        <nav class="navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href="index.html"><img style="height: 62px" src="uploads/{{$aboutus[0]->logo}}" alt="uploads/{{$aboutus[0]->logo}}"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav menu navbar-nav navbar-right">
                        <li><a href="index">HOME</a></li>
                        <li><a href="/about">ABOUT</a></li>
                        <li><a href="/services">SERVICES</a></li>
                        <li class="active"><a href="/projects">PROJECTS</a></li>
                        <li><a href="/contact">CONTACT</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>
<!-- end nav and topbar area -->
<section class="constructo-page-title-area parallaxsection">
    <div class="parallax-windowf" data-parallax="scroll" data-image-src="img/home1.jpg"></div>
    <div class="display-cell">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-left">
                    <div class="constructo-page-title">
                        <h1>OUR</h1>
                        <h1 class="titlecolor">PROJECTS</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="#">Projects</a></li>
                        </ol>
                        <img src="img/linew.png" alt="theconstructo.com">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of home area -->
<section class="constructo-get-quote-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 text-left">
                <div class="get-quate-content">
                    <h2>HANDLE YOUR PROJECT WITH PROFESSIONALS</h2>
                    <p>Our group of
                        professionals are involved in many projects and are experts in their respective domain.Please find the listed projects which we have been involved so far.  </p>
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <div class="get-btn">
                    <a href="/services">VIEW OUR SERVICES</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of get quate area -->
<!-- start project section -->
<section class="constructo-project-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="isotop-nav">
                    <ul>
                        <li data-filter="*"></li>
                        <li data-filter=".interior"></li>
                        <li data-filter=".archi"></li>
                        <li class="current" data-filter=".*">All Projects</li>
                        <li data-filter=".tiling"></li>
                        <li data-filter=".plumbning"></li>
                        <li data-filter=".buildings"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row isotop-active">
            <div class="col-sm-4 interior archi">
                <div class="constructo-single-project">
                    <div class="project-img">
                        <img src="img/hydropower.jpg" alt="theconstructo.com" style="height: 267.14px; width: 100% ">
                        <div class="pro-hover">
                            <a href="img/hydropower.jpg" class="fa magnifiq fa-search"></a>
                        </div>
                    </div>
                    <div class="pro-title">
                        <div class="pro-dat">
                            <p>15</p>
                        </div>
                        <h4>Hydropower/Energy</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 archi buildings">
                <div class="constructo-single-project">
                    <div class="project-img">
                        <img src="img/sanitaiton.jpg" alt="theconstructo.com" style="height: 267.14px; width: 100% ">
                        <div class="pro-hover">
                            <a href="img/sanitation.jpg" class="fa magnifiq fa-search"></a>
                        </div>
                    </div>
                    <div class="pro-title">
                        <div class="pro-dat">
                            <p>25</p>
                        </div>
                        <h4>Water Supply & Sanitation</h4>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 planing interior">
                <div class="constructo-single-project">
                    <div class="project-img">
                        <img src="img/pro3.png" alt="theconstructo.com">
                        <div class="pro-hover">
                            <a href="img/pro3l.jpg" class="fa magnifiq fa-search"></a>
                        </div>
                    </div>
                    <div class="pro-title">
                        <div class="pro-dat">
                            <p>20</p>
                        </div>
                        <h4>Urban Development</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 tiling planing">
            <div class="constructo-single-project">
                <div class="project-img">
                    <img src="img/waterresource.jpg" alt="theconstructo.com" style="height: 263px; width: 100%">
                    <div class="pro-hover">
                        <a href="img/waterresource.jpg" class="fa magnifiq fa-search"></a>
                    </div>
                </div>
                <div class="pro-title">
                    <div class="pro-dat">
                        <p>09</p>
                    </div>
                    <h4>Water Resources</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-4 buildings plumbning">
            <div class="constructo-single-project">
                <div class="project-img">
                    <img src="img/map.jpg" alt="theconstructo.com" style="height: 263px; width: 100%">
                    <div class="pro-hover">
                        <a href="img/map.jpg" class="fa magnifiq fa-search"></a>
                    </div>
                </div>
                <div class="pro-title">
                    <div class="pro-dat">
                        <p>23</p>
                    </div>
                    <h4>GIS/Mapping</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-4 planing tiling">
            <div class="constructo-single-project">
                <div class="project-img">
                    <img src="img/pro6.png" alt="theconstructo.com">
                    <div class="pro-hover">
                        <a href="img/pro6l.jpg" class="fa magnifiq fa-search"></a>
                    </div>
                </div>
                <div class="pro-title">
                    <div class="pro-dat">
                        <p>08</p>
                    </div>
                    <h4>Overall Experience Sheet</h4>
                </div>
            </div>

        </div>
    </div>

    </div>
</section>
<!-- end of project section -->
<!-- start footer top section -->
{{--
<section class="constructo-footer-top section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="footer-top-content">
                    <h2>Ok ! Let's Get Started Now.</h2>
                    <p>Maecenas scelerisque felis ornare placerat tempus. In turpis nisi, viverra hendrerit dolor vel,
                        auctor blandit sapien.</p>
                    <a href="/contact" class="contat-usf">CONTACT US</a>
                    <a href="/about" class="learn-moref">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>
--}}
<div class="constructo-copyright">
    <div class="scroll-top">
        <a href="#" class="top0 fa fa-angle-up"></a>
    </div>
    <div class="container">
        <div class="row">
            {{--  <div class="col-sm-6">
                  <div class="footer-link">
                      <a href="#" class="fa fa-facebook"></a>
                      <a href="#" class="fa fa-twitter"></a>
                      <a href="#" class="fa fa-google-plus"></a>
                      <a href="#" class="fa fa-feed"></a>
                      <a href="#" class="fa fa-linkedin"></a>
                      <a href="#" class="fa fa-skype"></a>
                      <a href="#" class="fa fa-vimeo"></a>
                      <a href="#" class="fa fa-tumblr"></a>
                  </div>
              </div>--}}
            <div class="col-sm-12 text-center">
                <div class="footer-text">
                    <p>JRConsultant © All Rights Reserved </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs"></script>
<!-- jquery min js -->
<script src="js/jquery.min.js"></script>
<!-- jquery waypoints -->
<script src="js/waypoints.min.js"></script>
<!-- jquery easing js -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- rippler js -->
<script src="js/jquery.rippler.min.js"></script>
<!-- bootstra js -->
<script src="js/bootstrap.min.js"></script>
<!-- jquery nav js -->
<script src="js/jquery.nav.js"></script>
<!-- jquery sticky js -->
<script src="js/jquery.sticky.js"></script>
<!-- slick js -->
<script src="slick/slick.min.js"></script>
<!-- jquery counter up -->
<script src="js/jquery.counterup.min.js"></script>
<!-- jqeury isotop filtaring plugins -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- jquery magnifiq popup    -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- parallax -->
<script src="js/parallax.min.js"></script>
<!-- jquery active js -->
<script src="js/active.js"></script>
</body>


<!-- Mirrored from www.kazierfan.com/themes/construcdo/constructo/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 04:53:54 GMT -->
</html>
