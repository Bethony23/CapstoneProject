<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$School = $_POST['School'];
$Counselor =$_POST['Counselor']
$Topic = $_POST['Topic'];

// database insert SQL code
$sql = "INSERT INTO `counselingservice` ( `fldName`, `fldEmail`, `fldPhone`, `fldTopic`) VALUES ('$Name', '$Email', '$Phone', '$School', '$Counselor', '$Topic')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>