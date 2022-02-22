
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
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="number" name="id"  value="<?=$user['id']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$user['name']?>"> <br> <br>
        <input type="text" name="lastN"  value="<?=$user['lastN']?>"> <br> <br>
        <input type="text" name="address"  value="<?=$user['address']?>"> <br> <br>
        <input type="number" name="phone"  value="<?=$user['phone']?>"> <br> <br>
        <input type="text" name="username"  value="<?=$user['username']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> <br>
        <input type="number" name="zipcode"  value="<?=$user['zipcode']?>"> <br> <br>
        <input type="text" name="pass"  value="<?=$user['pass']?>"> <br> <br>
        <input type="text" name="passc"  value="<?=$user['passc']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['Id'];
    $name = $_POST['name'];
    $lastN = $_POST['lastN'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $zipcode = $_POST['zipcode'];
    $pass = $_POST['pass'];
    $passc = $_POST['passc'];

    $userRepository->updateUser($id,$name,$lastN,$address,$phone,$username,$email,$zipcode,$pass,$passc);
    header("location:dashboard.php");
}


?>