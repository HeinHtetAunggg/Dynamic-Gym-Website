<?php
    include('connection.php');
    if(isset($_POST['txtsubmit']))
    {
        $Name=$_POST['txtname'];
        $email=$_POST['txtemail'];

        $select="SELECT *FROM Booking where Email='$email'";
        $query=mysqli_query($connect,$select);
        $count=mysqli_num_rows($query);

        if($count>0)
        {
            echo"<script> alert('Booking Successful')</script>";
        }
        else
        {
            $insert="INSERT INTO Booking(Name,Email)
                    values('$Name','$email')";
                    $query=mysqli_query($connect,$insert);
        }
        if($query)
        {
            echo"<script>alert('Your Booking Is Successful')</script>";
            echo"<script>alert('We Will Response Your Booking In A Few Minutes')</script>";
            echo"window.location(Workshop.php)";
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
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button  type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Make Your Booking</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Fill Your Name And Email Below To Make A Booking </a></li>
					<!-- <li><a href="#Registration" data-toggle="tab">Registration</a></li> -->
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal" method="POST">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name='txtname' placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name='txtemail' placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" name='txtsubmit' class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="Workshop.php">Book Later....</a>
								</div>
							</div>
						</form>
					</div>
					<!-- <div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div> -->
				</div>
			</div>
		</div>
	  </div>
	</div>

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
						<li class="nav-item"><a class="nav-link" href="Wanted.php">Wanted</a></li>
						<li class="nav-item active"><a class="nav-link" href="Workshop.php">Workshop</a></li>
						<li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
						<li class="nav-item "><a class="nav-link" href="hgecontact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="Featured.php">Featured</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Our Workshop<span class="m_1">Just having satisfied customers isn't good enough anymore. ....</span></h1>
		</div>
	</div>



    <div id="teachers" class="section sb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="images/repair4.jpg" height="400">
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">William Sawyer</h3>
                            <span class="post">General automotive mechanic</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="images/repair1.jpg" >
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Aron Steven</h3>
                            <span class="post">Service technicians</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="images/repair3.jpg">
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"> James Thomas </h3>
                            <span class="post">Heavy equipment mechanic</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="images/repair2.jpg">
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Adrian Connor</h3>
                            <span class="post">Brake and transmission technicians</span>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>


            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="images/repair6.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">TREADMILL REPAIR  |  ELLIPTICAL REPAIR </a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Welcome to Treadmill and Elliptical Repair. Get the best value from your treadmill and fitness equipment. We repair & service treadmills & send treadmill parts to our company. We also sell fitness equipment and have treadmills for sale. And we have guides about treadmill servicing and treadmill owners manuals to help maintain your own treadmill too.Have your treadmill repaired by us. We’ve been repairing treadmills for a couple of  years. But since Covid we like to work in a contactless situation and preferably where no-one is sick in your home. We will continue to repair treadmills and service fitness equipment  from our company right up to your place.You can have your new fitness equipment assembled by us. We assemble treadmills, multi-gyms, cross-trainers or any new exercise equipment.We can provide a maintenance service for school gyms. </p>
                            </div>
                            <div class="course-rating">
                                5
                                <i class="fa fa-star"></i>  
                                <i class="fa fa-star"></i>  
                                <i class="fa fa-star"></i>  
                                <i class="fa fa-star"></i>  
                                <i class="fa fa-star"></i>                             
                            </div>
                        </div>
                        <!-- <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 1 week to understand</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 25 people are trying</li>
                            </ul>
                        </div> -->
                    </div>
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-12">
                   <div class="course-item">
                        <div class="image-blog">
                            <img src="images/repair7.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">GYM EQUIPMENT MAINTENANCE AND SERVICE</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Gym equipment maintenance, service and repairs are all important aspects of your gym operation.  Each piece of commercial fitness equipment is often relatively expensive and, as such, is usually considered a long-term business asset, which you and your club’s members need to rely upon.Regular cleaning of the equipment and its operating environment will not only improve member perceptions of your facility, but it will also minimise the need for service calls and repairs.  That said, it is always important to refer to the manufacturer’s guidelines, to ensure that you are using cleaning solutions that won’t gradually degrade plastic and metal surfaces.  It’s also important to ensure you don’t apply any liquids to equipment when cleaning, in the interests of the equipment and, more importantly, your safety. </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>  
                                <i class="fa fa-star"></i>  
                                <i class="fa fa-star"></i>  
                                <i class="fa fa-star"></i>  
                                <i class="fa fa-star-half"></i>                             
                            </div>
                        </div>
                       <!--  <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> Everyday</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 71 people are trying</li>
                            </ul>
                        </div> -->
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            

	
    <div id="pricing-box" class="section sb">
        <div class="container">
              <h1> Coming Soon.....</h1>
              <br>
              <h4>Our Company Is Planning To Open The Gym After Covid-19,You Can Book Your Plan From Now On</h4>
              <br><hr/>
			<div class="row">
          
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Walk-In</h3>
                            </span>
                            <span class="price-value">$15 /<span class="month">month</span> <span>Walk-In Package</span><span>Can Do The Following List</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-star"></i>
                            <ul>
                                <li><b>Per Entry</b> Access To Gym</li>
                                <li><b>Full Range</b> Of Weights</li>
                                <li><b>Cardio</b></li>
                                <li><b>Mon-Fri</b></li>
                                <li><b>Avilable To Use</b> All Gym Equipments</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up" >
                            <a class="hover-btn-new orange" href="#"  data-toggle="modal" data-target="#login" ><span>Select Plan</span></a>
                            
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable ">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Gold</h3>
                            </span>
                            <span class="price-value">$50 /<span class="month">month</span> <span>Gold Package</span><span>Some Cool Stuff Are Waiting For You</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <ul>
                                <li><b>6 Months </b>Access To Gym</li>
                                <li><b>Full Range</b> Of Weights</li>
                                <li><b>Cardio</b></li>
                                <li><b>Zumba</b></li>
                                <li><b>Hip Hop Fit</b></li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <!-- <a href="#" class="hover-btn-new orange" ><span>Select Plan</span></a> -->
                             <a class="hover-btn-new orange" href="#"  data-toggle="modal" data-target="#login" ><span>Select Plan</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable orange">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Premium</h3>
                            </span>
                            <span class="price-value">$100 /<span class="month">month</span> <span>Premium Package</span><span>Let Us Take You To The Best Of The Best</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                            <ul>
                                <li><b>Unlimited</b> Access To Gym</li>
                                <li><b>Message Chairs</b></li>
                                <li><b>Bring A Friend</b></li>
                                <li><b>RG Pump</b></li>
                                <li><b>Aerobic Dance</b></li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                           <!--  <a href="#" class="hover-btn-new orange"><span>Select Plan</span></a> -->
                            <a class="hover-btn-new orange" href="#"  data-toggle="modal" data-target="#login" ><span>Select Plan</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>
            </div>
		</div>
    </div><!-- end section -->

    
                    </div><!--end carousel-->
                 </div><!-- end col-->
             </div> <!-- end row -->
        </div><!-- end container -->
   </div> <!-- end section -->

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
							<li><a style="color:#964B00;" href="#">Workshop</a>(You Are Here)</li>
							<li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact</a></li>
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
                            <li><a href="#">www.HomeGymequipment.com</a></li>
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">HGE</a> Design By : <a href="https://html.design/">Hein Htet Aung</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>