<?php

class Cont{
    private $id;
    private $name;
    private $lastN;
    private $address;
    private $email;
    private $message;

    function __construct($id,$name,$lastN,$address,$email,$message){
            $this->id = $id;
            $this->name = $name;
            $this->lastN = $lastN;
            $this->address = $address;
            $this->email = $email;
            $this->message = $message;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getLastN(){
        return $this->lastN;
    }
    function getAddress(){
        return $this->address;
    }
    function getEmail(){
        return $this->email;
    }
    function getMessage(){
        return $this->message;
    }
}

?>