<?php

class admin {
    private $AdminID ;
    private $AdminName ;
    private $AdminPassword ; 
    private $booking ; 
    private static $theAdmin;
    
    private function __construct()
    { 
    }
    
    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
    
    public static function getInstance() {
        if(!(self::$theAdmin instanceof self)) {
        self::$theAdmin = new self();
        }
        return self::$theAdmin;
    }    

    public function getAdminID() {
        return $this->AdminID;
    }
    public function getAdminName() {
        return $this->AdminName;
    }
    public function getAdminPassword() {
        return $this->AdminPassword;
    }   
}

?>