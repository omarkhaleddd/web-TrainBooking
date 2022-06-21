<?php

require_once '../../model/user.php';
require_once '../../controllers/DBController/DBController.php';
class userController
{
    protected $db;
    public function updatepassword($newpass ,  $userId)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="update user set UserPassword = $newpass where UserId = $userId";
            $result=$this->db->update($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(!$result)
                {
                    $_SESSION["errMsg"]="You have entered wrong name or password";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    
                    $this->db->closeConnection();
                    return true;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }
        public function updateage($age ,  $userId)
        {
            $this->db=new DBController;
            if($this->db->openConnection())
            {
                $query="update user set age = $age where UserId = $userId";
                $result=$this->db->update($query);
                if($result===false)
                {
                    echo "Error in Query";
                    return false;
                }
                else
                {
                    if(!$result)
                    {
                        $_SESSION["errMsg"]="You have entered wrong name or password";
                        $this->db->closeConnection();
                        return false;
                    }
                    else
                    {
                        
                        $this->db->closeConnection();
                        return true;
                    }
                }
            }
            else
            {
                echo "Error in Database Connection";
                return false;
            }
        }
    

    //update gender
    public function updategender($gender ,  $userId)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="update user set gender = $gender where UserId = $userId";
            $result=$this->db->update($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(!$result)
                {
                    $_SESSION["errMsg"]="You have entered wrong name or password";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    
                    $this->db->closeConnection();
                    return true;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }

    //update gender
    public function updateEmail($email ,  $userId)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="update user set email = $email where UserId = $userId";
            $result=$this->db->update($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(!$result)
                {
                    $_SESSION["errMsg"]="You have entered wrong name or password";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    
                    $this->db->closeConnection();
                    return true;
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