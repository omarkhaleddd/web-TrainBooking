<?php
require_once '../../model/user.php';
require_once '../../model/stations.php';
require_once 'DBController/DBController.php';
class adminController
{
    protected $db;

    public function viewUser(){
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="select * from user";
            $result=$this->db->select($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)
                {
                    $_SESSION["errMsg1"]="NO USERS IN THE DATABASE";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    // echo print_r($result);
                    $this->db->closeConnection();
                    return $result;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;

        }
    }

    public function viewTrain(){
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="select * from train";
            $result=$this->db->select($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)
                {
                    $_SESSION["errMsg1"]="NO TRAINS IN THE DATABASE";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    // echo print_r($result);
                    $this->db->closeConnection();
                    return $result;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;

        }
    }
    public function viewStation(){
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="select * from stations";
            $result=$this->db->select($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)
                {
                    $_SESSION["errMsg1"]="NO STATIONS IN THE DATABASE";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    // echo print_r($result);
                    $this->db->closeConnection();
                    return $result;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;

        }
    }
    public function AddStation(stations $station){
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $Stationname = $station->getStationName();
            $query="insert into stations values ('','$Stationname')";
            $result=$this->db->insert($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if ($result != false) {
                    // echo "Error in Query";
                    $this->db->closeConnection();
                    return true;
                } else {
                    $_SESSION["errMsg"] = "Somthing went wrong... try again later";
                    $this->db->closeConnection();
                    return false;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;

        }
    }
}




?>