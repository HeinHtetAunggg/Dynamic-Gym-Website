<?php

     include('connection.php');

     // $create="CREATE table customer

     // (

     //     CustomerID int not null primary key AUTO_INCREMENT,
     //     CustomerName  varchar(30),
     //     EmailAddress varchar(30),
     //     Password varchar(30),
     //     ReType varchar(30),
     //     PhoneNumber varchar(30),
     //     Gender varchar(30),
     //     Address varchar(30),
     //     Profile text,
     //     Additional varchar(30),
     //     Viewcount integer


     // 	)";
     // $query=mysqli_query($connect,$create);

     // if($query)
     // {
     // 	echo"<p>Register Successful</p>";

     // }


     $create="CREATE table staff
     (
            StaffID int not null primary key AUTO_INCREMENT,
            Staffname varchar(30),
            EmailAddress varchar(30),
            Address varchar(30),
            PhoneNumber varchar(30),
            Identity varchar(30),
            Education varchar(30),
            Position varchar(30),
            Workingexp varchar(30),
            profile text

        )";

     $query=mysqli_query($connect,$create);
     if($query)
     {
        echo"<p>Staff Registeration Successful</p>";
     }

    //  $create="CREATE table ProductType
    //  (
    //     ProductTypeID int not null primary key AUTO_INCREMENT,
    //     ProductTypeName varchar(30)
    // )";

    //  $query=mysqli_query($connect,$create);
    //  if($query)
    //  {
    //     echo"<p>Product Registeration Sucessful</p>";
    //  }


     // $create="CREATE Table Product
     // (
     //    ProductID int not null primary key AUTO_INCREMENT,
     //    ProductName varchar(30),
     //    Quantity varchar(30),
     //    Price int,
     //    Description varchar(100),
     //    ProductImage1 text,
     //    ProductImage2 text,     
     //    ProductTypeID int,
     //    EquipmentType int,
     //    foreign key (ProductTypeID) references ProductType(ProductTypeID)
     //    )";
     // $query=mysqli_query($connect,$create);
     // if($query)
     // {
     //    echo"<p> Proudct Entry Successful </p>";
     // }

//       $create="CREATE TABLE Contact
// (
//          ContactID int not null primary key AUTO_INCREMENT,
//          first_name varchar(30),
//          last_name varchar(30),
//          email varchar(30),
//          password varchar(30),
//          comments varchar(30)
//          )";
// $query=mysqli_query($connect,$create);
// if($query)
// {
//     echo"<p> Contact Form Successful</p>";
// }

// $create="CREATE Table Booking
// (
//        BookingID int not null primary key AUTO_INCREMENT,
//        Name varchar(30),
//        Email varchar(30)
//    )";
// $query=mysqli_query($connect,$create);
// if($query)
// {
//     echo"<p>Booking Form Successful</p>";
// }

$create="CREATE Table Payment
(
    PaymentID int not null primary key AUTO_INCREMENT,
    Email varchar(30),
    CardNumber varchar(30),
    CVV int
)";
$query=mysqli_query($connect,$create);
if($query)
{
    echo"<p>Payment Form Successful</p>";
  
}
  ?>

