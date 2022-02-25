<?php 
include_once 'databaseConnection.php';

class ContactRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
 

    function (){
        
    }
    function insertCont($cont){

        $conn = $this->connection;

        $id = $cont->getId();
        $name = $cont->getName();
        $lastN = $cont->getLastN();
        $address = $cont->getAddress();
        $email = $cont->getEmail();
        $message = $cont->getMessage();

        $sql = "INSERT INTO cont (id,name,lastN,address,email,message) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$lastN,$address,$email,$message]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllConts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM cont";

        $statement = $conn->query($sql);
        $conts = $statement->fetchAll();

        return $conts;
    }

    function getContById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM cont WHERE id='$id'";

        $statement = $conn->query($sql);
        $cont = $statement->fetch();

        return $cont;
    } 

    function deleteCont($id){
        $conn = $this->connection;

        $sql = "DELETE FROM cont WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

?>