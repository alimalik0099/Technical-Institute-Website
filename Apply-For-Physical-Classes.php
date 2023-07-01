<?php
include "db.php";
?>
<?php
if(isset($_POST['submit'])){
  $student_name=$_POST['student_name'];
  $father_name=$_POST['father_name'];
  $cnic=$_POST['cnic'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $dob=$_POST['dob'];
  $class_name=$_POST['class_name'];
  $refer_by=$_POST['refer_by'];
  $reference_input=$_POST['reference_input'];
  $duration=$_POST['duration'];
$image2 = $_FILES['image']['name'];
  $reg_no=(rand(10,10000)); 
  $entry_date=date('h:i:s a m/d/Y');

  $query_chck_cnic = mysqli_query($conn,"SELECT * FROM student_details WHERE cnic = '$cnic'AND decline='No'") or die(mysqli_error($conn)); 

  if(mysqli_num_rows($query_chck_cnic)>0){
    ?>
    <script type="text/javascript">alert('Sorry! Student Already Registered');</script>
    <?php
    }
    else{

 $query_chck_cnic1 = mysqli_query($conn,"SELECT * FROM pending_requests WHERE cnic = '$cnic'") or die(mysqli_error($conn)); 

  if(mysqli_num_rows($query_chck_cnic1)>0){
    ?>
    <script type="text/javascript">alert('Sorry! Student Already In Registration Process');</script>
    <?php
    }
    else{

$query_chck_email = mysqli_query($conn,"SELECT * FROM student_details WHERE email = '$email' AND decline='No'") or die(mysqli_error($conn)); 

  if(mysqli_num_rows($query_chck_email)>0){
    ?>
    <script type="text/javascript">alert('Sorry! Student Already Registered');</script>
    <?php
    }
    else{


$query_chck_email1 = mysqli_query($conn,"SELECT * FROM pending_requests WHERE email = '$email'") or die(mysqli_error($conn)); 

  if(mysqli_num_rows($query_chck_email1)>0){
    ?>
    <script type="text/javascript">alert('Sorry! Student Already In Registration Process');</script>
    <?php
    }
    else{
 $target_dir = "../admin/Student_pictures/";
 $path=$target_dir.$reg_no.'_'.$student_name.'_'.$image2;
 $target_file = $target_dir . basename($_FILES["image"]["name"]);
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   move_uploaded_file($_FILES['image']['tmp_name'],$path);

   $image=$reg_no.'_'.$student_name.'_'.$image2;
   move_uploaded_file($_FILES['image']['tmp_name'],$path);
    $sql = "INSERT INTO pending_requests(reg_no,student_name,father_name,cnic,address,email,phone,dob,class_name,refer,someone_refernce,entry_time,duration,image,class_status)

    VALUES ('$reg_no','$student_name','$father_name','$cnic','$address','$email','$phone','$dob','$class_name','$refer_by','$reference_input','$entry_date','$duration','$image','Physical')";
    if (mysqli_query($conn, $sql)) {
        $digree = count($_POST["digree"]);
 if($digree > 0)
{
  for($i=0; $i<$digree; $i++)
  {
    if(trim($_POST["digree"][$i] != ''))
    {
      $sql_edu = "INSERT INTO student_educations(reg_no,digree,subject,year,marks,institutuion) VALUES('$reg_no','".$_POST["digree"][$i]."','".$_POST["subject"][$i]."','".$_POST["year"][$i]."','".$_POST["marks"][$i]."','".$_POST["institutuion"][$i]."')";
     if (mysqli_query($conn, $sql_edu)) {

        $login_cnic=str_replace("-", "", $cnic);

        $sql_log = "INSERT INTO student_logins(reg_no,password)
        VALUES ('$reg_no','Cmittalagang')";
        if (mysqli_query($conn, $sql_log)) {
      session_start();
    $_SESSION['reg_no']= $reg_no;
    header('Location: After-Apply.php');
    }

     }
     
    }
  }
}
      
    }
    else{
        echo mysqli_error($conn);
    }





  }
}
}
}
}
  ?><!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="CMIT Computer & Technical College Talagang, CMIT Computer and Technical College Talagang, cmit computer and technical college talagang, cmit talagang, computer college in talagang, technical college talagang, best computer courses, computer course online, online classes talagang, talagang best college, computer academy talagang, cmit computer academy">
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
                            <a  href="Diploma-Verification.php" class="main-btn maintwo-btn">Diploma Verification</a>
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
                                        <a class="active" href="index.html">Home</a>
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
                                        <a href="contact.php">Contact</a>
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

        <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-banner-cont">
                            <h2>Apply</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Apply for physical classes</li>
                                </ol>
                            </nav>
                        </div>  <!-- page banner cont -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== PAGE BANNER PART ENDS ======-->

        <!--====== CONTACT PART START ======-->

        <section id="contact-page" class="pt-90 pb-120 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-from">
                            <div class="section-title">
                                <h2>Registration Form</h2>
                                <h5 class="mt-4">Please enter your correct informations</h5>
                                
                            </div> <!-- section title -->
                            <div class="main-form pt-45">
                                <form  enctype="multipart/form-data" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="singel-form form-group">
                                                <input name="student_name" type="text" placeholder="Your name" data-error="Please enter your full name." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="singel-form form-group">
                                                <input name="father_name" type="text" placeholder="Father Name" data-error="Please enter your father name." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-6 mt-20">
                                            <div class="singel-form form-group">
                                                <input name="cnic" type="text" placeholder="National Identity Card Number" data-error="Please enter your cnic." required="required" maxlength="13">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form --> 
                                        </div>
                                        <div class="col-md-6 mt-20">
                                            <div class="singel-form form-group">
                                                <input name="phone" type="text" placeholder="Phone" data-error="Please enter your personal mobile number." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-12 mt-20">
                                            <div class="singel-form form-group">
                                                <input name="address" type="text" placeholder="Home Address" data-error="Please enter your full home address." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-6 mt-20">
                                            <div class="singel-form form-group">
                                                <input name="email" type="email" placeholder="Email Address" data-error="Please enter your validate email address." required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-6 mt-20">
                                            <div class="singel-form form-group">
                                                <input name="dob" id="dob_input" type="text"data-error="Please enter your validate Date of birth." placeholder="Date Of Birth" onfocus="change_type()" required="required">
                                                <div class="help-block with-errors"></div>
                                            </div> <!-- singel form -->
                                        </div>
                                        <div class="col-md-12 mt-20">
                                         <div class="singel-form form-group">
                                            <select class="form-control" onchange="showhide_input()" name="refer_by" required="" id="refer_by_id">
                                              <option value="">Please select reference</option>
                                              <option value="Facebook">Facebook</option>
                                              <option value="Instagram">Instagram</option>
                                              <option value="Website">Website</option>
                                              <option value="Twitter">Twitter</option>
                                              <option value="Google Search">Google Search</option>
                                              <option value="Office Visitor">Office Visitor</option>
                                              <option value="Newspaper">Newspaper</option>
                                              <option value="Commerical Banners">Commerical Banners</option>
                                              <option value="Refer by someone">Refer by someone</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                      </div> <!-- singel form -->
                                  </div>



                                  <div class="col-md-12 mt-20" id="reference_div_id">
                                    <div class="singel-form form-group">
                                        <input name="reference_input" id="reference_input_id" type="text" placeholder="Enter name with some details to remember" data-error="Please enter name with details." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>


                                <div class="col-md-6 mt-20">
                                   <div class="singel-form form-group">
                                     <select name="class_name" class="form-control" required="">
                                        <option value="">Please select your course</option>
                                        <?php 
                                        $query = "SELECT * FROM class_details WHERE status='Available'";
                                        $result = mysqli_query($conn, $query);  
                                        if ($result->num_rows > 0) {
                                          while($row = mysqli_fetch_array($result))  
                                          { 
                                            ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['name'].' (Class Time: '.$row['shift'].' )';?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> <!-- singel form -->
                        </div>

                        <div class="col-md-6 mt-20">
                           <div class="singel-form form-group">
                             <select class="form-control" name="duration" required="">
                              <option value="">Please select course duration</option>
                              <option value="01 Month">01 Month</option>
                              <option value="03 Month">03 Month</option>
                              <option value="06 Month"> 06 Month</option>
                              <option value="01 Year">01 year</option>
                              <option value="02 year">02 Year</option>
                          </select>
                          <div class="help-block with-errors"></div>
                      </div> <!-- singel form -->
                  </div>
                  <hr>
            <div id="dynamic_field" class="mt-40"> 
            <div class="row">
              <div class="col-lg-2 col-md-2">
                    <div class="form-group">
                      <strong for="exampleInputEmail1">Degree Certificate</strong>
                      <input type="text" required="" placeholder="Degree Name" class="form-control mt-10" name="digree[]">
                    </div>
              </div>

              <div class="col-lg-2 col-md-2">
                    <div class="form-group">
                      <strong for="exampleInputEmail1">Subject</strong>
                      <input type="text" placeholder="Subject" class="form-control mt-10" required=""  name="subject[]">
                    </div>
              </div>

              <div class="col-lg-2 col-md-2">
                    <div class="form-group">
                      <strong for="exampleInputEmail1">Year</strong>
                      <input type="" placeholder="Year" class="form-control mt-10" required=""  name="year[]">
                    </div>
              </div>

              <div class="col-lg-2 col-md-2">
                    <div class="form-group">
                      <strong for="exampleInputEmail1">Marks / Grade</strong>
                      <input type="text" placeholder="Marks / Grade" class="form-control mt-10" required=""  name="marks[]">
                    </div>
              </div>

              <div class="col-lg-3 col-md-3">
                    <div class="form-group">
                      <strong for="exampleInputEmail1">Institutuion</strong>
                      <input type="text" placeholder="Institutuion" class="form-control mt-10" required=""  name="institutuion[]">
                    </div>
              </div>

              <div class="col-lg-1 col-md-1">
                    <div class="form-group">
                      <strong for="exampleInputEmail1">Add Row</strong>
                      <button type="button" name="add" id="add_row_btn" class="btn btn-success mt-10">Add</button>
                    </div>
              </div>

            </div></div>

                  <div class="col-md-4 mt-40">
                    <strong>Picture ( Not Allowed Selfie or edited Pictures)</strong>
                    <div class="singel-form form-group">
                    </div>
                </div>

                <div class="col-md-4 mt-40">
                    <input type="file" name="image" required="required">
                    <div class="singel-form form-group">
                    </div>
                </div>

                    <div class="col-md-12">
                        <div class="singel-form text-center">
                            <button type="submit" name="submit" class="main-btn">Apply</button>
                        </div> <!-- singel form -->
                    </div> 
                </div> <!-- row -->
            </form>
        </div> <!-- main form -->
    </div> <!--  contact from -->
</div>
</div> <!-- row -->
</div> <!-- container -->

</section>
 <!-- map -->
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






<script type="text/javascript">
    document.getElementById('reference_div_id').style.display="none";
    function showhide_input() {
       var select_val = document.getElementById('refer_by_id').value;
       if (select_val=="Refer by someone") {
         document.getElementById('reference_div_id').style.display="block";
         $("#reference_input_id").attr("required", true);

     }
     else{
      document.getElementById('reference_div_id').style.display="none";
      document.getElementById("reference_input_id").required = false;
      $("#reference_input_id").attr("required", false);
  }
}
</script>
<script type="text/javascript">
    function change_type() {
    
    document.getElementById('dob_input').type = 'date';
    }
</script>

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
<script>
$(document).ready(function(){
  var i=1;
  $('#add_row_btn').click(function(){
    i++;
     $('#dynamic_field').append('<div class="row" id="row'+i+'"><div class="col-lg-2 col-md-2"><div class="form-group"><input type="text" placeholder="Degree Name" required="" class="form-control mt-20" name="digree[]"></div></div><div class="col-lg-2 col-md-2"><div class="form-group"><input type="text" required=""  placeholder="Subject" class="form-control mt-20" name="subject[]"></div></div><div class="col-lg-2 col-md-2"><div class="form-group"><input required=""  type="number" placeholder="Year" class="form-control mt-20" name="year[]"></div></div><div class="col-lg-2 col-md-2"><div class="form-group"><input type="text" placeholder="Marks / Grade" required=""  class="form-control mt-20" name="marks[]"></div></div><div class="col-lg-3 col-md-3"><div class="form-group"><input type="text" required=""  placeholder="Institutuion" class="form-control mt-20" name="institutuion[]"></div></div><div class="col-lg-1 col-md-1 mt-20"><div class="form-group"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div></div>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });

  
});
</script>
</body>

</html>
