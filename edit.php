
<?php
$userId = $_GET['id'];
include_once 'userRepository.php';



$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="edit.css">
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        
        <div class="content">
        <div class="left">
        <h5>ID </h5>
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br> <br>
        <h5> Name </h5>
        <input type="text" name="name"  value="<?=$user['name']?>"> <br> <br>
        <h5> Last N </h5>
        <input type="text" name="lastN"  value="<?=$user['lastN']?>"> <br> <br>
        <h5> Address </h5>
        <input type="text" name="address"  value="<?=$user['address']?>"> <br> <br>
        <h5> Phone Num </h5>
        <input type="number" name="phone"  value="<?=$user['phone']?>"> <br> <br></div>
        
        <div class="right">
        <h5>Username </h5>
        <input type="text" name="username"  value="<?=$user['username']?>"> <br> <br>
        <h5> Email </h5>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> <br>
        <h5> ZipC </h5>
        <input type="number" name="zipcode"  value="<?=$user['zipcode']?>"> <br> <br>
        <h5> Passwords </h5>
        <input type="text" name="pass"  value="<?=$user['pass']?>"> <br> <br>
        <input type="text" name="passc"  value="<?=$user['passc']?>"> <br> <br>
        <h5> Role </h5>
        <input type="text" name="role"  value="<?=$user['role']?>"> <br> <br></div></div>

        <input type="submit" id="editBtn" name="editBtn" value="Save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['id'];
    $name = $_POST['name'];
    $lastN = $_POST['lastN'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $zipcode = $_POST['zipcode'];
    $pass = $_POST['pass'];
    $passc = $_POST['passc'];
    $role = $_POST['role'];

    $userRepository->updateUser($id,$name,$lastN,$address,$phone,$username,$email,$zipcode,$pass,$passc,$role);
    header("location:dashboard.php");
}


?>