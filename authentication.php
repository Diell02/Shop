<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $role = $_POST['role'];
         
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $role = stripcslashes($role);
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
        $role = mysqli_real_escape_string($con, $role);  
      
        $sql = "select * from user where username = '$username' and pass = '$password' and role = '$role'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['username']= $username;
            $_SESSION['password']= $password;
            $_SESSION['role']= $role;
            header("Location: Shop.php");    
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>