<?php

class ticket {
    private $TicketId ;
    private $TicketClass ;
    private $ ; 
    
    public function getTicketID() {
        return $this->TicketID;
    }
    public function setTicketID($x) {
        $this->TicketID = $x;
    }
    public function getTicketClass() {
        return $this->TicketClass;
    }
    public function setTicketClass($x) {
        $this->TicketClass = $x;
    }   
}

?>