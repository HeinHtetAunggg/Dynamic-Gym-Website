<?php

session_start();
include('connection.php');
include('HgeShoppingCartFunctions.php');

if(isset($_REQUEST['Action']))
{
	$Action=$_REQUEST ['Action'];
	if($Action === "Remove")
	{
            $ProductID=$_REQUEST['ProductID'];
            RemoveShoppingCart($ProductID);
	}
	elseif($Action ==="Buy")
	{
		$txtProductID=$_GET['txtProductID'];
		$txtBuyQty=$_GET['txtBuyQty'];
		AddShoppingCart($txtProductID,$txtBuyQty);
	}
	else
	{
		ClearShoppingCart();
	}
}
else
{
	$Action="";
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
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Shopping Cart<span class="m_1">Please Check Your List Before Payment </span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-12 blog-post-single">
                   

                     <form action="HgeShoppingCart.php" method="GET">
        
            <?php

            if(!isset($_SESSION['HgeShoppingCartFunctions']))
            {
                echo "<p>Shopping Cart is Empty</p>";
                echo  "<a href='Gallery.php'>Continue Shopping</a>";
            }

            else
            {
                ?>
                
                <table border='7' align='center' width= 100% border-color=white>
                    <tr>
                        <th><b><i><font color='#964B00' >Image</font></i></b></th>
                        <th><b><i><font color='#964B00'>ProductID</font></i></b></th>
                        <th><b><i><font color='#964B00'>Product Name</font></i></b></th>
                        <th><b><i><font color='#964B00'>Price</font></i></b></th>
                        <th><b><i><font color='#964B00'>BuyQty</font></i></b></th>
                        <th><b><i><font color='#964B00'>Total</font></i></b></th>
                        <th><b><i><font color='#964B00'>Action</font></i></b></th>

                    </tr>
                    <?php
           $size=count($_SESSION['HgeShoppingCartFunctions']);
           for($i=0; $i<$size; $i++)
           {

             $ProductImage1= $_SESSION['HgeShoppingCartFunctions'][$i]['ProductImage1'];
             $ProductID= $_SESSION['HgeShoppingCartFunctions'][$i]['ProductID'];
             $ProductName= $_SESSION['HgeShoppingCartFunctions'][$i]['ProductName'];
             $ProductPrice=$_SESSION['HgeShoppingCartFunctions'][$i]['Price'];
             $BuyQty=$_SESSION['HgeShoppingCartFunctions'][$i]['BuyQty'];
             $subTotal=$_SESSION['HgeShoppingCartFunctions'][$i]['Price']*$_SESSION['HgeShoppingCartFunctions'][$i]['BuyQty'];

             echo "<tr>";
             echo "<td><img src='$ProductImage1' width='100px' height='100px'/></td>";
            
             echo "<td><b><font color='black' >$ProductID</font></b></td>";
             echo "<td><b><font color='black'>$ProductName</font></b></td>";
             echo "<td><b><font color='black'>$ProductPrice</font></b></td>";
             echo "<td><b><font color='black'>$BuyQty</font></b></td>";
             echo "<td><b><font color='black'>$subTotal</font></b></td>";

             echo "<td><a href='HgeShoppingCart.php? ProductID=$ProductID&Action=Remove'><font color='black'><b>Remove</b></font></a></td>";
             echo "</tr>";




            
        }

                    ?>
                    <tr>
                        <td colspan="7" align="right">
                            <font color='#964B00'><b>Total Amount: </b></font><b><font color='black'>$ <?php echo CalculateTotalAmount() ?></font> </b></br>
                            <font color='#964B00'><b>VAT (5%):</b></font> <b> <font color='black'>$ <?php echo CalculateVAT() ?> </font></b></br>
                            <font color='#964B00'><b>Grand Total:</b></font><b><font color='black'> $ <?php echo CalculateTotalAmount() +  CalculateVAT() ?></font> </b></br>
                            <hr color='black'/>

                            <a href="HgeShoppingCart.php? Action=ClearAll"><font color='#964B00'><i><b>Clear Cart</b></i></font></a>|
                            <a href="Gallery.php"><font color='#964B00'><i><b>Continue Shopping</b></i></font></a>|
                            <a href="hgecheckout.php"><font color='#964B00'><i><b>Make Payment</b></i></font></a>|


                        </td>
                    </tr>

                </table>

                <?php

            }

            ?> 
      
         </form> 
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