<?php
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['lastN']) ||
    empty($_POST['address']) || empty($_POST['phone']) ||
    empty($_POST['username']) || empty($_POST['email']) ||
    empty($_POST['zipcode']) || empty($_POST['pass']) || empty($_POST['passc'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $lastN = $_POST['lastN'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $zipcode = $_POST['zipcode'];
        $pass = $_POST['pass'];
        $passc = $_POST['passc'];
        $id = $id.rand(100,999);

        $user  = new User($id,$name,$lastN,$address,$phone,$username,$email,$zipcode,$pass,$passc);
        $userRepository = new userRepository();

        $userRepository->insertUser($user);


    }
}



?>