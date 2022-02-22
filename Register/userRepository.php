<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $lastN = $user->getLastN();
        $address = $user->getAddress();
        $phone = $user->getPhone();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $zipcode = $user->getZipcode();
        $pass = $user->getPass();
        $passc = $user->getPassc();

        $sql = "INSERT INTO user (id,name,lastN,address,phone,username,email,zipcode,pass,passc) VALUES (?,?,?,?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$lastN,$address,$phone,$username,$email,$zipcode,$pass,$passc]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$lastN,$address,$phone,$username,$email,$zipcode,$pass,$passc){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, lastN=?, address=?, phone=?, username=?, email=?, zipcode=?, pass=?, passc=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$lastN,$address,$phone,$username,$email,$zipcode,$pass,$passc,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

//  $userRepo = new UserRepository;

//  $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>