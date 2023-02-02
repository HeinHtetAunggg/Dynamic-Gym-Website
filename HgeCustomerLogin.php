<?php
session_start();
include('connection.php');
if(isset($_POST['txtlogin']))
{
	$email=$_POST['txtemail'];
	$password=$_POST['txtpassword'];

	$select="SELECT *FROM customer WHERE EmailAddress='$email'
	         AND Password='$password'";
	$query=mysqli_query($connect,$select);
	$count=mysqli_num_rows($query);

	if($count>0)

	{
		$update="UPDATE Customer set Viewcount=Viewcount+1
		         where EmailAddress='$email' and Password='$password'";
		 mysqli_query($connect,$update);


		$row=mysqli_fetch_array($query);
		$CustomerID=$row['CustomerID'];
		$_SESSION['CustomerID']=$CustomerID;

		

		echo"<script>window.alert('Log In Successful')</script>";
		echo"<script>window.location='hgehome.php'</script>";
	}
	else
	{
		if(isset($_SESSION['loginError']))
		{
			$countererror=$_SESSION['loginError'];
			if($countererror ==1)
			{
				$_SESSION['loginError']=2;
				echo"<script>window.alert('Email and  Password do not match: Please Try Again Error Attempt 2 ')</script>";
				echo"<script>window.alert('You have reached limited. You can Log In To Your account again in 10 minutes')</script>";

			}
			if ($countererror==2)
			{
				echo"<script>window.alert('Email and  Password do not match: Please Try Again Error Attempt 3 ')</script>";
				echo"<script>window.alert('You have reached limited. You can Log In To Your account again in 10 minutes')</script>";
				echo"<script>window.location='CusLoginTimer.php'</script>";
			}
		}
		else{
			$_SESSION['loginError']=1;
			echo"<script>window.alert('Email and  Password do not match: Please Try Again Error Attempt 1 ')</script>";
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
    <title>Log In Form</title>  
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

<body>
	

	<div  class="parallax section db parallax-off" style="background-image:url('images/loginback.jpg');">
	<form action='HgeCustomerLogin.php' method="POST">

<div class="imgcontainer">
	<img src="images/gymlogo.png" alt="Avatar" class="avatar">
</div>



<div class="container">
	<label for="email" style="color: orange;"><b> Email Address</b></label>
	<input type="email" placeholder="Enter Your Email" name="txtemail" required>

	<label for="psw"  style="color: orange;"><b>Password</b></label>
	<input type='password' placeholder='Enter Your Password' name='txtpassword' required>

	<button type="submit" name='txtlogin' >Log In </button>
	<label style="color:orange">
		<input type="checkbox" checked="checked" name="remember" >Remember Me</lable>
	</label>
</div>

<div class="container" style="background-color:white">
	<button type="button" class="cancelbtn">Cancel</button>
	<span class="psw" style="color:black">Forgot password?</span>
</div>
</form>





<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
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
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact</a></li>
							
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">HGE</a> Design By : <a href="#">Hein Htet Aung</a></p>
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