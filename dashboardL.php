<?php 
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
else{
    if($_SESSION['role'] != "admin" ){
        header("location: shop.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DASHBOARD</h1>
</body>
</html>

<?php
}
?>