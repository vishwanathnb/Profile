<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','guvi_database');

$txtfullname = $_POST['username'];
$txtpassword = $_POST['password'];
$txtemail = $_POST['email'];
$txtdate = $_POST['date'];
$contact= $_POST['contact'];
$age = $_POST['Age'];
$txtcollege = $_POST['college'];
$txtlocation = $_POST['place'];

$sql = "INSERT INTO `guvi-table`(`username`, `password`, `email`, `contact`, `dob`, `age`, `college`, `location`) VALUES  ('$txtfullname','$txtpassword','$txtemail','$txtdate','$contact','$age','$txtcollege','$txtlocation')";


$rs = mysqli_query($con, $sql);

if($rs)
{
	// echo "Contact Records Inserted";
    header("Location: login.html");
    exit();
}

?>