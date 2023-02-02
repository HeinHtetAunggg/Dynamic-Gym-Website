<?php
include('connection.php');
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<title> Product Display</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<fieldset>
			<legend><b>Each Product Display Form</b></legend>
			<table>
				<?php
				$select="SELECT *FROM Product ORDER BY ProductID DESC ";
				$query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($query);

				if($count==0)
				{
					echo"<p>No Record Fount</p>";
					exit();
				}
				else
				{
					for($a=0; $a<$count; $a+=1)
					{
						$select1="SELECT *FROM Product ORDER BY ProductID LIMIT $a,1";
						$query1=mysqli_query($connect,$select1);
						$count1=mysqli_num_rows($query1);

						echo"<tr>";

						for($i=0; $i<$count1 ;$i++)

						{
							$data=mysqli_fetch_array($query1);
							$ProductID=$data['ProductID'];
							$ProductName=$data['ProductName'];
							$Price=$data['Price'];
							$image=$data['ProductImage1'];
							$image2=$data['ProductImage2'];
							$des=$data['Description'];
							?>
							<td align="center">
							<img src="<?php echo $image?>" width="300px" height="300px"/>
							<img src="<?php echo $image2?>" width="250px" height="300px"/><br/>
							<i><?php echo $ProductName?></i><br/>
							<b><?php echo $Price?></b><br/>
							<b><?php echo $des?></b><br/>
							<a href="ProductDetails.php?ProductID=<?php echo $ProductID?>">See More</a>

						</td>
						<?php

 
						}
						echo"</tr>";
					}
				}
				?>
				</table>
				</fieldset>
				</body>
				</html> -->

<!DOCTYPE html>
<html lang="en">
<head>

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





	<!-- Modal -->
	<!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<-- Nav tabs -->
				<!-- <ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul> -->
				<!-- <-- Tab panes --> 
				<!-- <div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
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
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>-->  
 
 	<body class="host_version">
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
						<li class="nav-item"><a class="nav-link" href="hgehome.php">Home </a></li>
						<li class="nav-item"><a class="nav-link" href="information.php">Information</a></li>
						<li class="nav-item"><a class="nav-link" href="Wanted.php">Wanted</a></li>
						<li class="nav-item"><a class="nav-link" href="Workshop.php">Workshop</a></li>
						<li class="nav-item active"><a class="nav-link" href="Gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="hgecontact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="Featured.php">Featured</a></li>
					</ul>
					<!-- <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                    </ul> -->
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Our Products <span class="m_1">Check out all of the products we have in the lists</span></h1>
		</div>
	</div>
	
    <!-- <div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-9 blog-post-single"> -->
                   
				<?php
				$select="SELECT *FROM Product ORDER BY ProductID DESC ";
				$query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($query);

				if($count==0)
				{
					echo"<p>No Record Found<p>";
					exit();
				}
				else
				{
					for($a=0; $a<$count; $a+=1)
					{
						$select1="SELECT *FROM Product ORDER BY ProductID LIMIT $a,1";
						$query1=mysqli_query($connect,$select1);
						$count1=mysqli_num_rows($query1);

						echo"<tr>";

						for($i=0; $i<$count1 ;$i++)

						{
							$data=mysqli_fetch_array($query1);
							$ProductID=$data['ProductID'];
							$ProductName=$data['ProductName'];
							$Price=$data['Price'];
							$Pimg1=$data['ProductImage1'];
							$pimg2=$data['ProductImage2'];
							$des=$data['Description'];
							?>
							<!-- <td align="center"> -->
								<div>
									<div>
										<div>
								 <div class="box">
							<img align="left" src="<?php echo $Pimg1?>" />
							<img   align="right" src="<?php echo $pimg2?>"/><br/>
							<p style="font-size: 21px;" ><i><b><?php echo $ProductName?></b></i></p><br/>
                                <hr/>
							<p><b>Price :</b>$<?php echo $Price?></p><br/>
							<p><b><?php echo $des?></b></p><br/>
							<a href="HgeProductDetails.php?ProductID=<?php echo $ProductID?>">See More</a>
</div>
						<!-- </td> -->

						<?php

 
						}
						echo"</tr>";
					}
				}
				?>
				
			</div>
		</div>
	</div>
</div>
<!-- <div class="shortcut"><font size="5px" ><b><a style="color: white;"  href="Rssfeed.php">Rss Feed</a></b></font></div> --><br>
<div class='shortcut'><b><a href="Rssfeed.php">Rss Feed</a></b></div>
				

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p>This company was founded in 2020 as a Home Gym Equipment Company and operated business in supplying in high-quality gym equipment at great prices.Instead of being just another gym equipment retailer, our founders wanted to be the best in the industry and set their minds to doing so!</p>
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
							<li><a style="color:#964B00;" href="#">Gallery</a>(You Are Here)</li>
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">Home Gym Equipment</a> Design By : <a href="#">Hein Htet Aung</a></p>
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