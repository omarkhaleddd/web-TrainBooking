<?php

class stations {
    private $StationId ;
    private $StationName ;
    
    public function getStationID() {
        return $this->StationID ;
    }
    public function getStationName() {
        return $this->StationName ;
    }
    public function setStationName($x) {
        $this->StationName = $x ;
    } 
}

?>