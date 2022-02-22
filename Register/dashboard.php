<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
             <tr>
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
                 <th>Edit</th>
                 <th>Delete</th>
                 
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
                     <td><a href='edit.php?id=$user[id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
</body>
</html>