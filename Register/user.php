<?php

class User{
    private $id;
    private $name;
    private $lastN;
    private $address;
    private $phone;
    private $username;
    private $email;
    private $zipcode;
    private $pass;
    private $passc;

    function __construct($id,$name,$lastN,$address,$phone,$username,$email,$zipcode,$pass,$passc){
            $this->id = $id;
            $this->name = $name;
            $this->lastN = $lastN;
            $this->address = $address;
            $this->phone = $phone;
            $this->username = $username;
            $this->email = $email;
            $this->zipcode = $zipcode;
            $this->pass = $pass;
            $this->passc = $passc;
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
    function getPhone(){
        return $this->phone;
    }
    function getUsername(){
        return $this->username;
    }
    function getEmail(){
        return $this->email;
    }
    function getZipcode(){
        return $this->zipcode;
    }
    function getPass(){
        return $this->pass;
    }
    function getPassc(){
        return $this->passc;
    }
}

?>