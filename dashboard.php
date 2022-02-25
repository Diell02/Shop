<?php 
session_start();

if(!isset($_SESSION['username'])){
    header("Location: Login.php");
}
else{
    if($_SESSION['role'] != "admin" ){
        header("location: Shop.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>

<div class="header" id="Header1">
            <a href="Home.php" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
            <div class="header-right">
              <a class="active" href="Home.php">Home</a>
            </div>
          </div>

          <h2>Te Dhenat E Perdoruesve</h2>
    <div class="dash">
    <table name="info">
             <tr id="tab">
                 <th>ID</th>
                 <th>NAME</th>
                 <th>LAST NAME</th>
                 <th>ADDRESS</th>
                 <th>PHONE</th>
                 <th>USERNAME</th>
                 <th>EMAIL</th>
                 <th>ZIPCODE</th>
                 <th>PASSWORD</th>
                 <th>PASSWORDC</th>
                 <th>ROLE</th>
                 <th>EDIT</th>
                 <th>DELETE</th>
                 
             </tr>

             <?php 
             include_once 'userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[id]</td>
                     <td>$user[name]</td>
                     <td>$user[lastN] </td>
                     <td>$user[address] </td>
                     <td>$user[phone] </td>
                     <td>$user[username] </td>
                     <td>$user[email] </td>
                     <td>$user[zipcode] </td>
                     <td>$user[pass] </td>
                     <td>$user[passc] </td>
                     <td>$user[role] </td>
                     <td><a href='edit.php?id=$user[id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table></div>
<br>
    <h2>Mesazhet Nga Klientet</h2>
    <div class="dash1">
    <table name="info1">
             <tr id="tab1">
                 <th>ID</th>
                 <th>NAME</th>
                 <th>LAST NAME</th>
                 <th>ADDRESS</th>
                 <th>EMAIL</th>
                 <th>MESSAGE</th>
                 <th>DELETE</th>
                 
             </tr>

             <?php 
             include_once 'contactRepository.php';

             $contactRepository = new ContactRepository();

             $conts = $contactRepository->getAllConts();

             foreach($conts as $cont){
                echo 
                "
                <tr>
                     <td>$cont[id]</td>
                     <td>$cont[name]</td>
                     <td>$cont[lastN] </td>
                     <td>$cont[address] </td>
                     <td>$cont[email] </td>
                     <td>$cont[message] </td>
                     <td><a href='delete1.php?id=$cont[id]'>Delete</a></td>
                </tr>
                ";
             }

             
             
             ?>
    </table></div>

</body>
</html>

<?php
}
?>