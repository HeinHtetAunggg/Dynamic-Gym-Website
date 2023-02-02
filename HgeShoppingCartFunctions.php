<?php  

function AddShoppingCart($ProductID,$BuyQty)
{
	include('connection.php');
	$query="SELECT * FROM Product WHERE ProductID='$ProductID'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);

	if($count < 1) 
	{
		echo "<p>Product ID not found.</p>";
		exit();
	}
	$row=mysqli_fetch_array($result);
	$ProductName=$row['ProductName'];
	$ProductPrice=$row['Price'];
	$ProductImage1=$row['ProductImage1'];
	

	if($BuyQty < 1) 
	{
		echo "<script>window.alert('Purchase Quantity Cannot be Zero (0)')</script>";
		echo "<script>window.location='HgeShoppingCart.php'</script>";
		exit();
	}

	if(isset($_SESSION['HgeShoppingCartFunctions'])) 
	{
		$Index=IndexOf($ProductID);

		
		if($Index == -1) 
		{
			$size=count($_SESSION['HgeShoppingCartFunctions']);

			$_SESSION['HgeShoppingCartFunctions'][$size]['ProductID']=$ProductID;
			$_SESSION['HgeShoppingCartFunctions'][$size]['ProductName']=$ProductName;
			$_SESSION['HgeShoppingCartFunctions'][$size]['Price']=$ProductPrice;
			$_SESSION['HgeShoppingCartFunctions'][$size]['BuyQty']=$BuyQty;
			$_SESSION['HgeShoppingCartFunctions'][$size]['ProductImage1']=$ProductImage1;
			
			
		}
		else
		{
			$_SESSION['HgeShoppingCartFunctions'][$Index]['BuyQty']+=$BuyQty;
		}
	}
	else
	{
		$_SESSION['HgeShoppingCartFunctions']=array(); //Create Session Array

		$_SESSION['HgeShoppingCartFunctions'][0]['ProductID']=$ProductID;
		$_SESSION['HgeShoppingCartFunctions'][0]['ProductName']=$ProductName;
		$_SESSION['HgeShoppingCartFunctions'][0]['Price']=$ProductPrice;
		$_SESSION['HgeShoppingCartFunctions'][0]['BuyQty']=$BuyQty;
		$_SESSION['HgeShoppingCartFunctions'][0]['ProductImage1']=$ProductImage1;

	}
	echo "<script>window.location='HgeShoppingCart.php'</script>";
}

function RemoveShoppingCart($ProductID)
{
	$Index=IndexOf($ProductID);
	unset($_SESSION['HgeShoppingCartFunctions'][$Index]);
	$_SESSION['HgeShoppingCartFunctions']=array_values($_SESSION['HgeShoppingCartFunctions']);

	echo "<script>window.location='HgeShoppingCart.php'</script>";
}

function ClearShoppingCart()
{	
	unset($_SESSION['HgeShoppingCartFunctions']);
	echo "<script>window.location='HgeShoppingCart.php'</script>";
}

function CalculateTotalAmount()
{
	$TotalAmount=0;

	$size=count($_SESSION['HgeShoppingCartFunctions']);

	for($i=0;$i<$size;$i++) 
	{ 
		$ProductPrice=$_SESSION['HgeShoppingCartFunctions'][$i]['Price'];
		$BuyQty=$_SESSION['HgeShoppingCartFunctions'][$i]['BuyQty'];
		$TotalAmount+=($ProductPrice * $BuyQty);
	}
	return $TotalAmount;
}

function CalculateVAT()
{
	$VAT=0;
	$VAT=CalculateTotalAmount() * 0.05;

	return $VAT;
}
function CalculateTotalQuantity()
{
	$TotalQuantity=0;
	$size=count($_SESSION['HgeShoppingCartFunctions']);

	for ($i=0; $i <$size ; $i++) 
	{ 
		$BuyQty=$_SESSION['HgeShoppingCartFunctions'][$i]['BuyQty'];
		$TotalQuantity+=$BuyQty;
	}
	return $TotalQuantity;
}

function IndexOf($ProductID)
{
	if (!isset($_SESSION['HgeShoppingCartFunctions'])) 
	{
		return -1;
	}

	$size=count($_SESSION['HgeShoppingCartFunctions']);

	if ($size < 1) 
	{
		return -1;
	}

	for ($i=0;$i<$size;$i++) 
	{ 
		if($ProductID == $_SESSION['HgeShoppingCartFunctions'][$i]['ProductID']) 
		{
			return $i;
		}
	}
	return -1;
}

?>