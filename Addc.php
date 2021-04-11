<?php
$servername= "localhost";
$username= "Bank";
$password= "12345";
$dbname= "bank";

// Create connection
$con= new mysqli($servername,$username,$password,$dbname);
// Check connection
if (!$con)
{
	die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Tushar Goyal','Tushar@gmail.com','20000','2001-08-15')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Mehul Baluja','Mehul12@gmail.com','0.00','2007-04-27')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Tarun Negi','TarunNegi84@gmail.com','35004','2012-04-26')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Prithvi Shaw','Prishvi6@gmail.com','0.00','2009-08-21')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Criss Morris','Morris10@gmail.com','666666','2007-11-12')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Bhavuk Baluja','Bhavuk@gmail.com','20064','2001-06-15')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Rahul Goyal','Rahul2@gmail.com','243','2007-04-27')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Ravi Shastri','Ravi4@gmail.com','6404','2012-04-26')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Rishabh Pant','Rishabh25@gmail.com','300000','2009-08-21')";
$con->query($sql);
$sql= "INSERT INTO `customer`(`Accountno`, `Name`, `Email`, `Balance`, `DOB`) VALUES (NULL,'Shres Aggrawal','Shres365@gmail.com','66996','2007-11-12')";
if($con->query($sql)==TRUE)
{
	echo("New Customer Added successfully");
}
else
{
	echo("Error Adding Customer: ".$con->error);
}

$con->close();
?>
