<?php

class User{
    private $id;
    private $name;
    private $surname;
    private $username;
    private $password;

    function __construct($id,$name,$surname,$username,$password){
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            $this->username = $username;
            $this->password = $password;
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
}

?>