<?php

include('connection.php');
if(isset($_POST['btnregister']))
{
	$custname=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$password=$_POST['txtpass'];
	$retype=$_POST['txtretype'];
	$phone=$_POST['txtphone'];
	$gender=$_POST['gender'];
	$address=$_POST['txtaddress'];
	$additional=$_POST['txtadd'];

	$image=$_FILES['txtprofile']['name'];
	$folder="hgeimg/";

	$filename=$folder.'_'.$image;
	$image=copy($_FILES['txtprofile']['tmp_name'],$filename);

	if(!$image)
	{
		echo"<p>Cannot Upload Your Profile Image</p>";
		exit();
	}
	$select="SELECT *FROM customer where EmailAddress='$email'";
	$query=mysqli_query($connect,$select);
	$count=mysqli_num_rows($query);

	if($count >0)
	{
		echo"<script> alert ('Your Emails Is Already Existed!! Resigsteration Fail')</script>";
	}
	else
	{
		$insert= "INSERT INTO customer(CustomerName,EmailAddress,Password,ReType,PhoneNumber,Gender,Address,Profile,Additional,Viewcount)
		              values('$custname','$email','$password','$retype','$phone','$gender','$address','$filename','$additional','1')";
		 $query=mysqli_query($connect,$insert);

		 if($query)
		 {
		 	echo"<script>alert('Your Registeration is Succssful')</script>";
		 	echo"<script>alert('Enjoy Playing At Our Gym')</script>";
		 	echo"<script>window.location='hgehome.php'</script>";

		 }
	}

}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style2.css">
	
	<title>Customer Register Form</title>
	 <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

  
  	<div  class="parallax section db parallax-off" style="background-image:url('images/regback.jpg');">


            <form action="HgeCustomerRegister.php" method="POST" enctype="multipart/form-data">

		<table border='19' align='center' width="700px" height='800px'>

<div class="imgcontainer">
	<img src="images/gymlogo.png" alt="Avatar" class="avatar">
</div>

			<tr>
      			<td colspan='9' align='center' ><h1 style="color:#F4A950"><i><strong style="font-size: 33px;">Registration Form</strong></i></h1></td>
      		</tr>


			<tr>
				<td ><b><strong style="font-size: 20px">Customer Name</strong></b></td>
				<td><input   style="height: 60px;width: 480px;" type='text'  name='txtname' placeholder="Enter Your Full Name" required></td>
			</tr>
			

			<tr>
				<td><b><strong style="font-size: 20px;">Email Address</strong></b></td>
				<td><input  style="height: 60px;width: 480px;"  type='email' name='txtemail' placeholder="Enter Your Email" required></td>
			</tr>

			<tr>
				<td><b><strong style="font-size: 20px;">Password</strong></b></td>
				<td><input  style="height: 60px;width: 480px;" type='text' name='txtpass' placeholder="Enter Your Password" required></td>
			</tr>

			<tr>
				<td><b><strong style="font-size: 20px;">ReType </strong></b></td>
				<td><input  style="height: 60px;width: 480px;"  type='password' name='txtretype' placeholder="Re-Type Your Password" required></td>
			</tr>

			<tr>
				<td><b><strong style="font-size: 20px;">Phone Number</strong></b></td>
				<td><input  style="height: 60px;width: 480px;"  type='phone' name='txtphone' placeholder="Enter Your Phone" required></td>
			</tr>

			<tr>
				<td><b><strong style="font-size: 20px;">Gender</strong></b></td>
				<td><lable for='male' ><strong style="font-size: 17px;">Male</strong></lable>
				<input type='radio' name='gender' id='male' value='male'>

				<lable for='female'><strong style="font-size: 17px;">Female</strong></lable>
				<input type='radio' name='gender' id='female' value='female'>
			</td>
		</tr>

		<tr>
			<td><b><strong style="font-size: 20px;">Address</strong></b></td>
			<td><input  style="height: 60px;width: 480px;"  type='address' name='txtaddress' placeholder="Enter Your Address" required>
			</td>
		</tr>

	

		

		

		  <tr>
		      <td><b><strong style="font-size: 20px;">Your Profile Picture</strong></b></td>
		      <td><input type='file' name='txtprofile'></td>
		      </tr>

		      <tr>
		      <td><b><strong style="font-size: 20px;">Additional Message</strong></b></td>
		      <td> <textarea  style="height: 50px;width: 480px;"  name='txtadd' placeholder="Enter Any Additional Message To Us"></textarea></td>
		     </tr>

		     <tr>
		     	<td></td>
		     	<td><input type='checkbox' name='reading' required>
		     		<lable for='reading'><b><i><strong style="font-size: 15px;">I Have Read And Understand The Gym Rules And Agree To The Terms Of Policy</strong></i></b></lable>
		     	</td>
		     </tr>
<tr>
	         <td></td>
               <td><div class="g-recaptcha" data-sitekey="6LeSh1sgAAAAABIjwB5cNhR7UqvenyA1FYhHsJao"></div></td>
           </tr>

		     <tr>
		     	<td></td>
		     	<td><input type='submit'  name='btnregister' value='Register Now'></td>
		     </tr>


		 </table>
   </div>

</body>
  </form>

</html>



