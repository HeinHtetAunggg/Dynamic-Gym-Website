<?php

include('connection.php');
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action='Wanted.php' method="POST" >
		<input type="text" name="txtSearch" placeholder="Search Here"/>
		<a href="Wanted.php"><button  class="search-button" name="btnSearch">Search</button></a>
	</form>

	<?php
	if(isset($_POST['btnSearch']))
	{
         $vname=$_POST['txtSearch'];
         $select="SELECT * FROM Product p, ProductType pt
                   WHERE p.ProductTypeID=pt.ProductTypeID
                   AND p.EquipmentType='Second Hand'
                   AND p.ProductName LIKE '%$vname%'";
                   $query=mysqli_query($connect,$select);
                   $count=mysqli_num_rows($query);
                   if($count>0)

                   {
               for($i=0; $i< $count; $i +=5)
               {
                  $select1="SELECT * FROM Product p,ProductType pt
                   WHERE p.ProductTypeID=pt.ProductTypeID
                   AND p.EquipmentType='Second Hand'
                   AND p.ProductName LIKE '%$vname%' LIMIT $i,5";
                   $query1=mysqli_query($connect,$select1);
                   $count1=mysqli_num_rows($query1);
                   ?>
                   <h3> Second Hand Equipment</h3>

                   <div>
                   	<?php

                   	for($j=0; $j <$count1; $j++)
                   	{
                   		$data=mysqli_fetch_array($query1);
                   		$ProductID=$data['ProductID'];
                   		$ProductName=$data['ProductName'];
                   		$Quan=$data['Quantity'];
                   		$Price=$data['Price'];
                   		$Des=$data['Description'];
                   		$Pimg1=$data['ProductImage1'];
                   		$Pimg2=$data['ProductImage2'];
                   		?>
                   		<div>
                   			<div>
                   				<div>
                   					<div>
                   						<div>
                   							<a href="sdetail.php? PID=<?php echo$ProductID ?>&qty=1">
                   								<img src="<?php $data['ProductImage1'] ?>">
                   							</a>
                   						</div>
                   						<div> Sale Products</div>
                   					</div>

                   					<div>
                   						<h3>
                   							<a href="sdetail.php?PID=<?php echo $ProductID ?> qty=1">
                   								<?php echo $ProductName ?></a>
                   							</h3>

                   							<div></div>
                   							<div class="description"><?php echo $data['Description']?></div>
                   							<div class="price"> $<?php echo $data['Price']?></div>
                   						</div>


                   						<div>
                   							<div>
                   								<ul>
                   									<li>
                   									 <button><i><a href="ProductCartList.php?pid=<?php echo $ProductID ?>&qty=1">Add To Cart</i></button>
                   									</li>
                   								</ul>
                   							
                   						</div>
                   					</div>
                   				</div>
                             </div>
                       </div>
                       <?php
                   	}
                   	echo"</div>";

                   
               


                  
           }

               }
	}
		?>


</body>
</html> -->




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
						<li class="nav-item active"><a class="nav-link" href="Wanted.php">Wanted </a> </li>
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
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Second Hand<span class="m_1">Check Out Our Second Hand Home Gym Equipment </span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-9 blog-post-single">
                    <!-- <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_single.jpg" alt="" class="img-fluid">
						</div>
						<div class="post-content">
							<div class="post-date">
								<span class="day">30</span>
								<span class="month">Nov</span>
							</div>
							<div class="meta-info-blog">
								<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
								<span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
								<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
							</div>
							<div class="blog-title">
								<h2><a href="#" title="">perferendis doloribus asperiores.</a></h2>
							</div>
							<div class="blog-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
								<blockquote class="default">
									Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.
								</blockquote>
								<p>Phasellus tristique commodo libero, eget dignissim turpis dignissim quis. Morbi sit amet laoreet nibh, gravida scelerisque felis. Phasellus ultrices pellentesque ligula et viverra. Integer elementum, risus et tempor ultricies, libero turpis pellentesque massa, at facilisis erat nunc hendrerit erat. Praesent rhoncus, augue nec condimentum porta, magna dui volutpat augue, vitae blandit magna quam in massa. Fusce a rhoncus diam. Proin nec lacinia nibh. Praesent sed nisi sed purus dictum laoreet.</p>
								<p>Duis at tortor augue. Ut et justo consequat, facilisis lectus facilisis, tincidunt massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam vel vestibulum urna. Fusce sed magna posuere, vehicula odio vitae, tempor arcu. Pellentesque eget felis sed eros maximus elementum ultrices a elit. Sed ac sodales enim.</p>
							</div>							
						</div>
					</div>
					 -->



					<!--  <form class="searchbox"  action="Wanted.php" method="POST">
                   <input type="text" placeholder="Search.." name="txtSearch">
                 <a href="Wanted.php"> <button  class="fa fa-search" name="btnSearch"></button></a>
                    </form> -->

                    <form  class="newsearchbox" action='Wanted.php' method="POST" >
		<input type="text"  name="txtSearch"  placeholder="Search Here"/>
		<a href="Wanted.php"><button  class="fa fa-search" name="btnSearch">Search</button></a>
	</form> 
	

<?php
	if(isset($_POST['btnSearch']))
	{
         $vname=$_POST['txtSearch'];
         $select="SELECT * FROM Product p, ProductType pt
                   WHERE p.ProductTypeID=pt.ProductTypeID
                   AND p.EquipmentType='Second Hand'
                   AND p.ProductName LIKE '%$vname%'";
                   $query=mysqli_query($connect,$select);
                   $count=mysqli_num_rows($query);
                   if($count>0)

                   {
               for($i=0; $i< $count; $i +=6)
               {
                  $select1="SELECT * FROM Product p,ProductType pt
                   WHERE p.ProductTypeID=pt.ProductTypeID
                   AND p.EquipmentType='Second Hand'
                   AND p.ProductName LIKE '%$vname%' LIMIT $i,6";
                   $query1=mysqli_query($connect,$select1);
                   $count1=mysqli_num_rows($query1);
                   ?>
                   <h2 style="color:#964B00;"> Second Hand Equipment</h2>

                   <div>
                   	<?php

                   	for($j=0; $j <$count1; $j++)
                   	{
                   		$data=mysqli_fetch_array($query1);
                   		$ProductID=$data['ProductID'];
                   		$ProductName=$data['ProductName'];
                   		$Quan=$data['Quantity'];
                   		$Price=$data['Price'];
                   		$Des=$data['Description'];
                   		$Pimg1=$data['ProductImage1'];
                   		$Pimg2=$data['ProductImage2'];
                   		?>
                   		<div>
                   			<div>
                   				<div>
                   					<div>
                   						<div>
                   							<a href="sdetail.php? PID=<?php echo$ProductID ?>&qty=1">
                   								<img src="<?php $data['ProductImage1'] ?>">
                   							</a>
                   						</div>
                   						<div class="second"> <h2><b><i>Sale Products</i></b><h2></div>
                   					</div>
                                     <hr/>
                   					<div class="second">
                   						<h3>
                   							<a href="ProductDetails.php?PID=<?php echo $ProductID ?> qty=1">
                   								<b><?php echo $ProductName ?></b></a>
                   							</h3>
                   							<hr/>
                   							<td align="center">
							              <img align="left" src="<?php echo $Pimg1?>" width="250px" height="300px"/>
							             <img align="right" src="<?php echo $Pimg2?>" width="250px" height="300px"/><br/>



                   							<div></div>
                   							<div class="description"><b>Description :</b><?php echo $data['Description']?></div>
                   							<div class="price"> <b>Price  :</b>$<?php echo $data['Price']?></div>
                   							<div class="quantity"><b> Quantity  :</b><?php echo $data['Quantity']?></div>
                   						</div> 





                   						<div>
                   							<div>
                   									
                   									 <button style="background-color:#964B00;"><i><a href="hgecheckout.php">Add To Cart</i></button>

	
                   							
                   						</div>
                   					</div>
                   				</div>
                             </div>
                       </div>
                       <?php
                   	}
                   	echo"</div>";

                   
               


                  
           }

               }
	}
		?>


					<div class="gym-author">
						<div class="author-bio">
							<h3 class="author_name"><a href="#">Nick Mitchell</a></h3>
							<h5><b>Professional Trainer Thoughts On  <a href="Wanted.php">Second Home Gym Equipments</a></b></h5>
							<p class="author_det">
								It is absolutely fine to buy second hand gym equipment untill the condition of equipments are very good and there is no wear and tear over the surface of equipment.

                           You can buy multi purpose equipments that can be used for various exercises. Such equipment are known as compound exercise machine.
                       </p>
						</div>
						<div class="author-desc">
							<img src="images/Tthought.jpg" alt="about author" width="100px" height="150px">
							<ul class="author-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</div>
					</div>
					
					<div class="blog-comments">
						<h4><b>Comments (3)</b></h4>
						<div id="comment-blog">
							<ul class="comment-list">
								<li class="comment">
									<!-- <div class="avatar"><img alt="" src="images/Gymmb1.jpg" class="avatar"></div> -->
									<img align="left" alt="" src="images/Gymmb1.jpg" width="100px" height="140px" style="border-radius: 80%;">
									<div class="comment-container">
										<h5 class="comment-author"><a href="#">John Smith</a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1">February 22, 2022</a>
											<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
										</div>
										<div class="comment-body">
											<p>Old But Gold. Really useful even though they are second hand.</p>
										</div>
									</div>
								</li>
								<li class="comment">
									<!-- <div class="avatar"><img alt="" src="images/avatar-02.jpg" class="avatar"></div> -->
									<img align="left" alt="" src="images/Gymmb2.jpg" width="100px" height="140px" style="border-radius: 80%;">
									<div class="comment-container">
										<h5 class="comment-author"><a href="#"><b>Alice</b></a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1">March 26, 2021</a>
											<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
										</div>
										<div class="comment-body">
											<p>Helped Me Out A Lot During Covid-19 Period. Equipments Are Better Than I Thought.</p>
										</div>
									</div>
									<ul class="children">
										<li class="comment">
											<!-- <div class="avatar"><img alt="" src="images/avatar-03.jpg" class="avatar"></div> -->
											<img align="left" alt="" src="images/Gymmb3.jpg" width="100px" height="140px" style="border-radius: 80%;">
											<div class="comment-container">
												<h5 class="comment-author"><a href="#"><b>William And Hanah</b></a></h5>
												<div class="comment-meta"><a href="#" class="comment-date link-style1">February 14, 2015</a><a class="comment-reply-link link-style3" href="#respond">Reply »</a></div>
												<div class="comment-body">
													<p>Reasonable price and pretty effective. We got worried about some errors before ordering second hand but things did not go as expected. Even though the title is second hand, it looks like brand new to use and thank you for making our days more meaningful with your equipment. Recommend website to buy!!!</p>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="comments-form">
						<h4>Leave a comment</h4>
						<div class="comment-form-main">
							<form action="Wanted.php">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-name" placeholder="Name" id="commenter-name" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-email" placeholder="Email" id="commenter-email" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-url" placeholder="Website URL" id="commenter-url" type="text">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="2"></textarea>
										</div>
									</div>
									<div class="col-md-12 post-btn">
										<button class="hover-btn-new orange"><span>Post Comment</span></button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
                </div><!-- end col -->

				<div class="col-lg-3 col-12 right-single">
					<div class="widget-search">
 						<!-- <div class="site-search-area"> --> 
							



						<!-- </div>
					</div>
					<div class="widget-categories">
						<h3 class="widget-title">Categories</h3>
						<ul>
							<li><a href="#">Political Science</a></li>
							<li><a href="#">Business Leaders Guide</a></li>
							<li><a href="#">Become a Product Manage</a></li>
							<li><a href="#">Language Education</a></li>
							<li><a href="#">Micro Biology</a></li>
							<li><a href="#">Social Media Management</a></li>
						</ul>
					</div> -->
					<div class="widget-tags">
						<h3 class="widget-title"><b>Search Tags</b></h3>
						<ul class="tags">
							<li><a href="#">Chest Press</a></li>
							<li><a href="#">Touch Screen AC4.0HP Treadmill</a></li>
							<li><a href="#">Rubber Hex Dumbbell</a></li>
							<li><a href="#">Boxing Mitts Station</a></li>
							<li><a href="#">Home Fitness Spin Bike</a></li>
						</ul>
					</div>
				</div>
				</div>
            </div><!--end row-->
         </div><!-- end container-->
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
                            <li><a style="color:#964B00;" href="#">Wanted</a>(You Are Here)</li>
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
