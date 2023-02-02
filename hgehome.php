
<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Home Gym Equiment</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!---- Cookies Css--->
     <link rel="stylesheet" href="https://www.codeithub.com/cookie-consent-box-using-html-css-javascript/style.css">

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
				<a class="navbar-brand">
					<img src="images/gymlogo.png" alt="" /width=100% height="90px">
					
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>

                    <form class="searchbox" action="hgehome.php">
                   <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                    </form>


                      



				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="hgehome.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="information.php">Information</a></li>
						<li class="nav-item"><a class="nav-link" href="Wanted.php">Wanted </a> </li>
                        <li class="nav-item"><a class="nav-link" href="Workshop.php">Workshop </a> </li>
						<li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="hgecontact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="Featured.php">Featured</a></li>
					</ul>
					<!-- <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="HgeCustomerLogin.php" ><span>Log In Now</span></a></li>
                    </ul> -->
                    
                    <?php

                       	if(!isset($_SESSION['CustomerID']))
                       	{
                       		echo"<script>alert('Login')</script>";
                       	}
                       	else
                       	{
                       		$CustomerID=$_SESSION['CustomerID'];
                       		$select="SELECT *FROM customer where CustomerID='$CustomerID'";
                       		$query=mysqli_query($connect,$select);
                       		$count=mysqli_num_rows($query);
                       		if($count>0)
                       		{
                       			$data=mysqli_fetch_array($query);
                       			$count1=$data['Viewcount'];
                       			echo "<p style='color:orange;'>"."Viewcount:" . $count1; 
                       		}
                       	}
                       ?>
        

                    
                    


				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/ass1.jpeg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong> The Home Gym Equipment</strong> Company</h2>
										<p class="lead">Empower Yourself To Make  Change You Need To Make </p>
											<a href="HgeCustomerRegister.php" class="hover-btn-new"><span>Register Now</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="HgeCustomerLogin.php" class="hover-btn-new"><span>Log In</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/ass2.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Push Harder<strong>Go longer</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">The Pain You Feel Today Will Be The Stregent You Feel Tomorrow </p>
											<a href="HgeCustomerRegister.php" class="hover-btn-new"><span>Register Now</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="HgeCustomerLogin.php" class="hover-btn-new"><span>Log In</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/ass3.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>No Pain</strong> No gain</h2>
										<p class="lead" data-animation="animated fadeInLeft">Do Something Today That Your Future Self Will Thank You For.</p>
											<a href="HgeCustomerRegister.php" class="hover-btn-new"><span>Register Now</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="HgeCustomerLogin.php" class="hover-btn-new"><span>Log In</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>



	<div class="wrapper">
    <!-- <img src="#" alt=""> -->
    <div class="content">
      <header> Cookies Contest</header>
      <p>This website use cookies to ensure you get the best experience on our website.</p>
      <div class="buttons">
        <button class="item">I understand</button>
        <a href="#" class="item">Learn more</a>
      </div>
    </div>
  </div>

  <script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");

    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=CodingNepal; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=CodingNepal"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>


	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Welcome</h3>
                    <p class="lead">By joining us, you’ve already taken the first step on your fitness journey and we couldn’t be happier to walk with you on the path to achieve your health and fitness goals!</p>
                </div>
            </div><!-- end title -->



            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                    <div class="message-box">
                        <h4>2022 Latest Products Of Our Gym</h4>
                        <h2>Featured Photos</h2>
                        <p>For those who want to gain optimal muscle strength,bodyweight exercises aren't necessarily enough,especillay if the goal is to increase muscle mass and size.</p>

                        <p> Now that the new year has started and resolutions are still fresh on our minds.Enjoy playing with our new equipments </p>

                        <a href="#" class="hover-btn-new orange"><span>View More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                    <div class="post-media wow fadeIn">
                        <img src="images/ass4.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/ass5.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/ass6.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			
		

				
				<div class="col-xs-6 col-xs-6">
                    <div class="message-box">
                    	<h4>Watch Some Cool Videos</h4>
                        <h2>Featured Videos</h2>
                        <p><b>Endurance, or aerobic,</b> activities increase your breathing and heart rate. They keep your heart, lungs, and circulatory system healthy and improve your overall fitness. Examples include brisk walking, jogging, swimming, and biking.</p>

                        <p> <b>Strength, or resistance training,</b> exercises make your muscles stronger. Some examples are lifting weights and using a resistance band.</p>

                        <p><b>Balance</b> exercises can make it easier to walk on uneven surfaces and help prevent falls. To improve your balance, try tai chi or exercises like standing on one leg.</p>

                        <p> <b>Flexibility</b> exercises stretch your muscles and can help your body stay limber. Yoga and doing various stretches can make you more flexible.</p>

                        <a href="#" class="hover-btn-new orange"><span>View More</span></a>
                    </div><!-- end messagebox -->
               
                      </div><!-- end col -->

                   </div><!-- end row --> 
               </div><!-- end container -->
    </div><!-- end section -->
					
        

    <div class="col-xs-6 col-xs-6">
                    <div class="post-media wow fadeIn">
                        <video src="videos/video1.mp4" type="video/mp4" class="videos-fluid videos-rounded" controls></video>
                        </div><!-- end media-->
                </div><!-- end col -->
                 

                <div class="col-xs-6 col--xs-6">
                	<div class="post-media wow fadeIn">

                		<video src="videos/video2.mp4" type="videos/mp4" class="videos- fulid videos-rounded" controls></video>
                		</div>
                	</div>



    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Trainers Suggestion</h3>
                    <p class="lead">With Covid-19 going on. half of the people say they won't return to regular gyms.So, to help you get started, we hit up <strong>7 different types of tools</strong> for you. Whether you have a lot of space or a little,here's what you need to shape up around the house.Check out these 7 Home Gym Essentials that the trainsers suggest. </p>
                </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">

							<div class="timeline__content home-bg-01">
								<h2><b><i>Power Block</i></b></h2>
                                   <p>Unlike many pairs of adjustable dumbbells, Powerblocks’ Pro Series features a unique structure that aids in durability; you won’t have to worry about dropping these weights and jamming their mechanisms. That means you can train with focus—and see plenty of gains.</p>
								
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content home-bg-02">
								<h2><b><i>Adjustable Bench</i></b></h2>
								<p>Now that’s an adjustable bench. Prime’s adjustable bench is built to last and includes a host of adjustments, performing as a decline bench, a flat bench, a standard seat (for shoulder presses) and including a variety of incline settings as well.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content home-bg-03">
								<h2><b><i>Interlocking Gym Floor Tiles</i></b></h2>
								<p>Protect your floors—not to mention your joints—with these non-toxic foam tiles. Whether you’re throwing around weights or a judo partner, they’ll provide a safe surface for your home workouts.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content home-bg-04">
								<h2><b><i>Crossrope</i></b></h2>
								<p>This isn’t your ordinary jump rope. Crossrope jump ropes are special not only for their ergonomic handle and seamless rotation, but they are also customized to your height. You can also interchange the rope for a more weighted, strength building experience or back down to heart-pumping cardio.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content home-bg-05">
								<h1><b><i>Mirror</i></b></h1>
								<p >The Mirror is all the rage for the best in at-home fitness. If you’re new here, to the eye The Mirror appears to be a beautifully minimal piece of home decor. But once turned on it’s so much more. It offers a variety of high tech workouts and virtual personal trainers and classes with the touch of a button. It’s definitely a splurge, but you’ll never have to invest in a gym membership again.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content home-bg-06">
								<h2><b><i>Bellitron</i></b></h2>
								<p>Stroops’ latest innovation rethink the home dumbbell; grab two adjustable 45-pound Bellitron dumbbells and you can combine them to form a single 90-pound barbell, opening the door for greater exercise variety.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content home-bg-07">
								<h2><b><i>Bese Barbell</i></b></h2>
								<p>The barbell (along with weight plates that will be discussed later) is the most important piece of equipment because it is the cornerstone for doing the majority of strength training exercises, including but not limited to the squat, bench press, power clean, deadlift, military press and curls.<strong>Squat it, snatch it, deadlift it, press it </strong></p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">30</p>
					<h3>Products</h3>
				</div><-- end col -->

				<!-- <div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">7</p>
					<h3>Trainers</h3>
				</div><-- end col --> 

				<!-- <div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">200</p>
					<h3>Members</h3>
				</div> --><!-- <-- end col--> 
			<!-- </div> --><!-- end row -->
		<!-- </div> --><!-- end container -->
	<!-- </div> --><!-- end section -->

  <!--   <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Choose Your Plan</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div> --><!-- end title -->

           <!--  <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li><a class="active" href="#tab1" data-toggle="pill">Monthly Subscription</a></li>
                            <li><a href="#tab2" data-toggle="pill">Yearly Subscription</a></li>
                        </ul>
                    </div>
                </div> --><!-- end col -->
            </div>

           <!--  <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$45</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$59</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$85</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div> --><!-- end row -->
                        <!-- </div> --><!-- end pane -->

                        <!-- <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$477</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$485</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$500</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div> --><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
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
                    <a href="#"><img src="images/logo_07.jpg" alt="" class="img-repsonsive"></a>
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
                            <li><a style="color:#964B00;" href="#">Home</a>(You Are Here)</li>
                            <li><a href="#">Information</a></li>
                            <li><a href="#">Wanted</a></li>
                            <li><a href="#">Workshop</a></li>
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022<a href="#">Home Gym Equipment</a> Design By : <a href="#">Hein Htet Aung</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>