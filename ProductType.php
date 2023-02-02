<?php

include('connection.php');
if(isset($_POST['btnregister']))
{
	$name=$_POST['txtproductname'];

	
	$select="SELECT * FROM ProductType where ProductTypeName='$name'";
	$query=mysqli_query($connect,$select);
	$count=mysqli_num_rows($query);

	if($count>0)
	{
		echo"<script>alert('Product Register Not Successful')</script>";
	}
	else
	{
		$insert="INSERT INTO ProductType(ProductTypeName)
	values('$name')";
	$query=mysqli_query($connect,$insert);
}

	if($query)
	{
            echo"<script>alert('Brand Choosing Successful')</script>";
            echo"<script>alert('Choose Product Type')</script>";
            echo"<script>window.location('ProductType.php')</script>";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="ProductType.php" method="POST" >
		<table border="1" align="center" width="500px">

			<tr>
				<td colspan="2" align ="center"><h2></h2>
				</td>
			</tr>

			<tr>
				<td>ProductType Name</td>
				<td><input type="text" name='txtproductname' placeholder="Enter Product Name" required></td>
			</tr>


			

			<tr>
				<td></td>

			<td><button type="submit" name='btnregister' >Register </button></td>
		</tr>
		</table>
	</from>



</body>
</html>