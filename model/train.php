<?php
require_once'./stations.php';
class train {
    private $TrainID ;
    private $TrainArrival ;
    private $station;
    
    public function getStation(){
        return $this->Station;
    }
    public function setStation($x){
        $this->Station = $x;
    }
    
    public function getTrainID() {
        return $this->TrainID;
    }
    public function setTrainID($x) {
        $this->TrainID = $x;
    }
    public function getTrainArrival() {
        return $this->TrainArrival;
    }
    public function setTrainArrival($x) {
        $this->TrainArrival = $x;
    }
}

?>