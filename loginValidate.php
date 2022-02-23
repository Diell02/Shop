<?php
    if(isset($_POST['loginBtn'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo "Fill all fields!";
        }
        else{
            include_once('connection.php'); 
            $username = $_POST['username'];  
            $password = $_POST['password'];
            

                 
                $username = stripcslashes($username);  
                $password = stripcslashes($password); 
                $username = mysqli_real_escape_string($con, $username);  
                $password = mysqli_real_escape_string($con, $password);  
                
              
                $sql = "select * from user where username = '$username' and pass = '$password'";  
                $result = mysqli_query($con, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                  
                
                if($count == 1){  
                    session_start();
                    $_SESSION['username']= $username;
                    $_SESSION['password']= $password;
                    $_SESSION['role']= $row['role'];
                    header("Location: Shop.php");  
                }  
                else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
                } 
                
        }
    }
?>