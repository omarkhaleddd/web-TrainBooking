<?php

class user {
    private $UserId ;
    private $balance ;
    private $gender ; 
    private $Username ;
    private $age ;
    private $email ;
    private $UserPassword ;
    private $DOB ;
    
    public function getUserID() {
        return $this->UserID;
    }
    public function setUserID($x) {
        $this->UsernID = $x;
    }
    public function getbalance() {
        return $this->balance;
    }
    public function setbalance($x) {
        $this->balance = $x;
    }
    public function getUserPassword() {
        return $this->UserPassword;
    }
    public function setUserPassword($x) {
        $this->UserPassword = $x;;
    }    

    public function getUsername() {
        return $this->Username;
    }
    public function setUsername($x) {
        $this->Username = $x;
    }
    public function getgender() {
        return $this->gender;
    }
    public function setgender($x) {
        $this->gender = $x;
    }
    public function getDOB() {
        return $this->DOB;
    }
    public function setDOB($x) {
        $this->DOB = $x;
    }


}

?>