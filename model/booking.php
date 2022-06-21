<?php

class booking {
    private $BookingId ;
    private $DayOFJourney ;
    private $ ; 
    
    public function getBookingID() {
        return $this->BookingID;
    }
    public function setBookingID($x) {
        $this->BookingID = $x;
    }
    public function getDayOFJourney() {
        return $this->DayOFJourney;
    }
    public function setDayOFJourney($x) {
        $this->DayOFJourney = $x;
    }    
}

?>