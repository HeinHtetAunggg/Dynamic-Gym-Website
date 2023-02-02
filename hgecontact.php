<?php
    include('connection.php');
    if(isset($_POST['txtContact']))
   {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $comments = $_POST['comments'];
 
   $select="SELECT * FROM Contact where email='$email'";
   $query=mysqli_query($connect,$select);
   $count=mysqli_num_rows($query);

   if($count>0)
   {
    echo "<script>window.alert=hgecontact.php</script>";
   }
   else
   {
    $insert="INSERT INTO contact(first_name,last_name,email,password,comments)
    values ('$first_name','$last_name','$email','$password','$comments')";
    $query=mysqli_query($connect,$insert);

    if($query)
    {
        echo"<script>alert('Your Message Has Been Successfully Sent')</script>";
        echo"<script>alert('We Will Contact You In A Few Minute')";
        echo"<script>window.location=hgecontact.php</script>";
    }
      }
   }

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Home Gym Equipment</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style2.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

       

</head>
<body class="host_version"> 

	<!-- Modal -->
	

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/gymlogo.png" alt="" /width=100% height="90px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="hgehome.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="information.php">Information</a></li>
						<li class="nav-item "><a class="nav-link" href="Wanted.php">Wanted</a></li>
						<li class="nav-item"><a class="nav-link" href="Workshop.php">Workshop</a></li>
						<li class="nav-item "><a class="nav-link" href="Gallery.php">Gallery</a></li>
						<li class="nav-item active "><a class="nav-link" href="Hgecontact.php">Contact</a></li>
						<li class="nav-item "><a class="nav-link" href="Featured.php">Featured</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

    
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Contact Us<span class="m_1">We Love To Hear From You!</span></h1>
		</div>
	</div>


  
    



	
    <div id="contact" class="section wb">
        <div class="container">       
            <div class="section-title text-center">
                <hr/>
                <label for="language-picker-select">Select your language</label>


    <select name="language-picker-select" id="language-picker-select">
      <option lang="my" value="Myanmar">Burmese</option>
      <option lang="en" value="english" selected>English</option>
      <option lang="fr" value="francais" >Français</option>
      <option lang="it" value="italiano" >Italian</option>
      <!-- other language options -->
    </select>
    <hr/>
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                      <!--   <form id="contactform" action="hgecontact.php" method="POST"> -->
                        <form id="contactform" class="" action="hgecontact.php" name="contactform" method="POST">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Your Password">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <tr>
               

             <div>
                 <input  class="Agree" type='checkbox' name='reading' required>
                <lable for='reading'><strong style="color:white;">I Have Read And Understand The Gym Rules And Agree To TheThe<b><a style="color: orange;" href="https://policies.google.com/">Terms Of Policy</a></b></strong></lable>
               
            </div>
                                <div class="text-center pd">
                                    <button type="submit" name='txtContact' value='txtContact' id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Contact Now</button>
                                </div>
                            </div>

                       <!--  </form> -->
                    </div>
                </div><!-- end col -->
				<div class="col-xl-6 col-md-12 col-sm-12">

					<div class="map-box">
						<!-- <div id="custom-places" class="small-map"></div> -->
						<div class="mapouter"><div class="gmap_canvas"><iframe width="751" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;height:500px;width:751px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:751px;}</style></div></div>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


	
	<div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.jpg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.jpg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.jpg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.jpg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.jpg" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> This company was founded in 2020 as a Home Gym Equipment Company and operated business in supplying in high-quality gym equipment at great prices.Instead of being just another gym equipment retailer, our founders wanted to be the best in the industry and set their minds to doing so!</p>
                        <div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Information</a></li>
                            <li><a href="#">Wanted</a></li>
							<li><a href="#">Workshop</a></li>
							<li><a href="#">Gallery</a></li>
                            <li><a style="color:#964B00;" href="#">Contact</a>(You Are Here)</li>
                            <li><a href="#">Featured</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">HomeGymEquipment.com</a></li>
                            <li><a href="#">www.HomeGymEquipment.com</a></li>
                            <li>PO Box 16122 Collins Street 8007 Myanmar</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">Home Gym Equipment</a> Design By : <a href="#">Hein Htet Aung</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script> -->
	<!-- Mapsed JavaScript -->
	<!-- <script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script> -->
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>


    </body>
    
</html>

