<?php 
require('connection.php');


$query = "Select * from `guvi-table`";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<div id="maindiv">
        <div id="headerdiv">
            <h2 id="header">Profile</h2>
        </div>
        <div id="detaildiv">
        <div class="maindiv">
                            <div class="form-items1">
                                <p>UserName</p>
                                <p>Email Id</p>
                                <p>DOB </p>
                                <p>Contact</p>
                                <p>Age</p>
                                <p>College</p>
                                <p>Location</p>
                                
                            </div>
                            
                            <div class="form-items1">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="form-items1">
                                <p><?php echo $row['username']; ?></p>
                                <p><?php echo $row['email']; ?></p>
                                <p><?php echo $row['dob']; ?></p>
                                <p><?php echo $row['contact']; ?></p>
                                <p><?php echo $row['age']; ?></p>
                                <p><?php echo $row['college']; ?></p>
                                <p><?php echo $row['location']; ?></p>
                            </div>
            
        </div>
    </div>
</body>
</html>