<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "guvi_database";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(!$con) {
        echo "Connection failed";  
    }  
    
?>  