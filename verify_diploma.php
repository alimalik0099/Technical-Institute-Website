<?php
include 'db.php';
if (isset($_POST['verify_diploma_onsite'])) {
    $roll_no=$_POST['roll_no'];
    $query = "SELECT * FROM certificates WHERE roll_no='$roll_no'";
    $result = mysqli_query($conn, $query);  
    if ($result->num_rows < 1) {
      ?>
      <script type="text/javascript">
        alert("Sorry! No record exists");
        window.location.href='Diploma-Verification.php';
    </script>
    <?php
}
else{
    $row = mysqli_fetch_array($result);
}
}
else{
    ?>
    <script type="text/javascript">
        window.location.href='Diploma-Verification.php';
    </script>
    <?php
}

?>
<!doctype html>
    <html lang="en">
    <head>

        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       <meta name="description" content="CMIT Diploma Verification,Online Verification,CMIT Verification,cmit diploma Verification,cmit student,verification,cmit student verify,cmit verify diploma,cmit diploma verify,CMIT diploma student Verification,CMIT Student Diploma Verification,CMIT Computer & Technical College Talagang, CMIT Computer and Technical College Talagang, cmit computer and technical college talagang, cmit talagang, computer college in talagang, technical college talagang, best computer courses, computer course online, online classes talagang, talagang best college, computer academy talagang, cmit computer academy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>CMIT Computer College & Technical Talagang</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="css/slick.css">

        <!--====== Animate css ======-->
        <link rel="stylesheet" href="css/animate.css">

        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="css/nice-select.css">

        <!--====== Nice Number css ======-->
        <link rel="stylesheet" href="css/jquery.nice-number.min.css">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="css/default.css">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="css/style.css">

        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="css/responsive.css">


    </head>

    <body>

        <!--====== PRELOADER PART START ======-->

        <div class="preloader">
            <div class="loader rubix-cube">
                <div class="layer layer-1"></div>
                <div class="layer layer-2"></div>
                <div class="layer layer-3 color-1"></div>
                <div class="layer layer-4"></div>
                <div class="layer layer-5"></div>
                <div class="layer layer-6"></div>
                <div class="layer layer-7"></div>
                <div class="layer layer-8"></div>
            </div>
        </div>

        <!--====== PRELOADER PART START ======-->

        <!--====== HEADER PART START ======-->

        <header id="header-part">

            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-contact text-lg-left text-center">
                                <ul>
                                    <li><img src="images/all-icon/map.png" alt="icon"><span>Mundial Chowk, Main Chakwal Road Talagang</span></li>
                                    <li><img src="images/all-icon/email.png" alt="icon"><span>support@cmit.pk</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-opening-time text-lg-right text-center">
                                <p>Opening Hours : Monday to Saturay - 8 Am to 7 Pm</p>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header top -->

            <div class="header-logo-support pt-30 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo.png" alt="Logo">
                                </a>
                                <a  href="Diploma-Verification.php">Diploma Verification</a>


                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="support-button float-right d-none d-md-block">
                                <div class="support float-left">
                                    <div class="icon">
                                        <img src="images/all-icon/support.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <p>Need Help? call us free</p>
                                        <span>0342 559 2943</span>
                                    </div>
                                </div>
                                <div class="button float-left">
                                    <a href="Diploma-Verification.php" class="main-btn">Diploma Verification</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header logo support -->

            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="about.html">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="courses.html">Courses</a>
                                            <ul class="sub-menu">

                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="events.html">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="Shabbir-Ahmad-Yousaf.html">Our teachers</a>
                                        </li>
                                    <!-- <li class="nav-item">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="active" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->

                    </div>

                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->
    

    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-from">
                        <div class="section-title">
                            <h5>Online Diploma Verification</h5>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <h6>Subject: <ins style="font-weight: bold;font-style: italic;">VERIFICATION OF DIPLOMA IN <?php echo $row['course_name'];?></ins></h6>

                            <p class="mt-3">It is verified that <b><?php echo $row['student_name'];?> S/D/O <?php echo $row['father_name'];?></b> was a bona fide student of <b><ins>CMIT, Computer & Technical College Talagang Pakistan.</ins></b><br> She/He has been studying here in <b><ins style="font-weight: bold;font-style: italic;"><?php echo $row['course_name'];?></ins></b> Session <?php echo $row['from_session'];?>-<b><ins>To <?php echo $row['to_session'];?></ins></b> with Reg No <b><ins><?php echo $row['reg_no'];?></ins></b> and <b><ins>Roll No.<?php echo $row['roll_no'];?></ins></b></p>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->

    </section>
    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    

    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="images/logo.png" alt="Logo"></a>
                            </div>
                            <p>CMIT is the name of excellence aiming to provide quality education in the field of computer and information technology.</p>
                            <ul class="mt-20">
                                <li><a target="_blank" href="https://web.facebook.com/CmitTalagang"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="mailto: support@cmit.pk"><i class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="https://wa.me/923425592943"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index.html"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right"></i>Courses</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="events.html"><i class="fa fa-angle-right"></i>Event</a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                <li><a href="https://web.facebook.com/CmitTalagang"><i class="fa fa-angle-right"></i>Page</a></li>
                                <li><a href="Shabbir-Ahmad-Yousaf.html"><i class="fa fa-angle-right"></i>Teachers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Mundial Chowk, Main Chakwal Road Talagang</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+92 3425 592 943</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>support@cmit.pk</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-center text-white pt-15">
                            <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="index.php">CMIT Computer College</a>.</strong>
                            All rights reserved.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-white  text-center pt-15">
                         <div class="float-right d-none d-sm-inline-block">
                          Developed & Support <b><a href="https://alimalik.pk/" target="_blank"> Ali Malik</a></b>
                      </div>
                  </div>
              </div>
          </div> <!-- row -->
      </div> <!-- container -->
  </div> <!-- footer copyright -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TOP PART ENDS ======-->







<!--====== jquery js ======-->
<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="js/bootstrap.min.js"></script>

<!--====== Slick js ======-->
<script src="js/slick.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="js/jquery.magnific-popup.min.js"></script>

<!--====== Counter Up js ======-->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>

<!--====== Nice Select js ======-->
<script src="js/jquery.nice-select.min.js"></script>

<!--====== Nice Number js ======-->
<script src="js/jquery.nice-number.min.js"></script>

<!--====== Count Down js ======-->
<script src="js/jquery.countdown.min.js"></script>

<!--====== Validator js ======-->
<script src="js/validator.min.js"></script>

<!--====== Ajax Contact js ======-->
<script src="js/ajax-contact.js"></script>

<!--====== Main js ======-->
<script src="js/main.js"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="js/map-script.js"></script>

</body>

</html>