<?php
include_once 'userRepository.php';
include_once 'user.php';
include_once 'contactRepository.php';
include_once 'cont.php';

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
        $role = $_POST['role'];
        $id = $username.rand(100,999);

        $user  = new User($id,$name,$lastN,$address,$phone,$username,$email,$zipcode,$pass,$passc,$role);
        $userRepository = new userRepository();

        $userRepository->insertUser($user);


    }
}

if(isset($_POST['contBtn'])){
    if(empty($_POST['name']) || empty($_POST['lastN']) 
        || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['message']) ){
        echo"Fill all fields !";
    }
    else{
        
        $name = $_REQUEST['name'];
        $lastN = $_REQUEST['lastN'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        $id = $name.rand(100,999);

        $cont = new Cont($id,$name,$lastN,$address,$email,$message);
        $contactRepository = new contactRepository();

        $contactRepository->insertCont($cont);
        
    }
}



?>