<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "register";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); 
    $query = mysqli_query($con,'select role from user');
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  