<?php
include('connection.php');
if(isset($_POST['txtsubmit']))
{
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$address=$_POST['txtaddress'];
	$phone=$_POST['txtphone'];
	$identity=$_POST['gender'];
	$edu=$_POST['txtedu'];
	$pos=$_POST['txtpos'];
	$work=$_POST['exp'];

	$image=$_FILES['image']['name'];
	$folder="images/";

	$filename=$folder.'_'.$image;
	$image=copy($_FILES['image']['tmp_name'],$filename);

	if(!$image)
	{
		echo"<p>Cannot Upload Image</p>";
		exit();
	}
	$select="SELECT *FROM staff where EmailAddress='$email'";
	$query=mysqli_query($connect,$select);
	$count=mysqli_num_rows($query);

	if($count>0)
	{
		echo"<script> alert('Your Email Is Already Existed!! Cannot Register')</script>";

	}
	else
	{
		$insert="INSERT INTO staff(Staffname,EmailAddress,Address,PhoneNumber,Identity,Education,Position,Workingexp,profile)
			values('$name','$email','$address','$phone','$identity','$edu','$pos','$work','$image')";
			$query=mysqli_query($connect,$insert);

			if($query)
			{
				echo"<script>alert('Staff Registertation Successful')</script>";
				echo"<script>window.location='Staff.php'</script>";
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
						<li class="nav-item "><a class="nav-link" href="Wanted.php">Wanted </a> </li>
						<li class="nav-item"><a class="nav-link" href="Workshop.php">Workshop </a> </li>
						
						<li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="hgecontact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="Featured.php">Featured</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<form action='Staff.php' method='POST' enctype='multipart/form-data'>
		<div class="all-title-box">
		<div class="container text-center">
			<h1>Staff Entry<span class="m_1">This page is for staff only.</span></h1>
		</div>
	</div>
	<br/>
	<table align='center' width='700px'>
		<tr>
			<td>Name</td>
			<td><input type='text' name='txtname' placeholder='Enter your name' required/></td>
		</tr>

		<tr>
			<td>Email Address</td>
			<td><input type='email' name='txtemail' placeholder='Enter your email' required/></td>
		</tr>

		<tr>
			<td>Address</td>
			<td><input type='address' name='txtaddress' placeholder='Enter your address' required/></td>
		</tr>

		<tr>
			<td>Phone Number</td>
			<td><input type='phone' name='txtphone' placeholder='Enter your phone' required/></td>
		</tr>

		<tr>
			<td>Identity</td>
			<td><lable for='male'>Male</lable>
				<input type='radio' name='gender' id='male' value='male'>
				<lable for ='female'>Female</lable>
				<input type='radio' name='gender' id='female' value='female'>
				</td>
				</tr> 
		<tr>
			<td>Education</td>
			<td><select name='txtedu' >
				<option>Undergraduated</option>
				<option>Graduated</option>
				<option>Master Degree</option>
			</select>
		</td>
	</tr>

	        <tr>
	        	<td>Position</td>
	        	<td><select name='txtpos'>
	        		<option>Sale</option>
	        		<option>Manager</option>
	        		<option>Marketing</option>
	        	</select>
	        	</td>
	        </tr>

	        <tr>
	        	<td>Working experience</td>
	        	<td><section class='exp'>
	        		<label for='experience'style="color:#F4A950" >How many years of experience you have in this field</label>
	        		<br>
	        		<span>1 year </span>
	        		<input type='range' name='exp' id='exp' min='1' max='5' value='1' required/>
	        		<span>5 years</span>
	        	</section></td>
	        </tr>

	        <tr>
	        	<td>Choose Your Profile Picture</td>
	        	<td><input type='file' name='image'></td>
	        </tr>

	        <tr>
	        	<td></td>
	        	<td><input type='submit' name='txtsubmit' value='Save'>
	        		<input type='reset' value='clear'>
	        	</td>
	        </tr>
	    </table>
	</form>

	
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Home Gym Equipment</a> Design By : <a href="">Hein Htet Aung</a></p>
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