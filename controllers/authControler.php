<?php 

require_once '../../model/user.php';
require_once 'DBController/DBController.php';
class AuthController
{
    protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection
    public function login(User $user)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $x = $user->getUsername();
            $y = $user->getUserPassword();
            $query="select * from user where UserName='$x' and UserPassword ='$y'";
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
                    session_start();
                    $_SESSION["errMsg"]="You have entered wrong User Name or User password";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    session_start();    
                    $_SESSION["userId"]=$result[0]["UserId"];
                    $_SESSION["userName"]=$result[0]["UserName"];
                    $_SESSION["userRole"]=$result[0]["roleId"];
                    
                    // echo print_r($result);
                    if($result[0]["roleId"]==1)
                    {
                        $_SESSION["userRole"]="Admin";
                    }
                    else
                    {
                        $_SESSION["userRole"]="User";
                    }
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
    public function register(User $user)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $UserName = $user->getUsername();
            $UserPassword = $user->getUserPassword();
            $query="insert into user values ('','$UserName','$UserPassword', NULL, NULL, NULL,2,NULL)";
            $result=$this->db->insert($query);
            if($result!=false)
            {
                session_start();
                $_SESSION["userId"]=$result;
                $_SESSION["userName"]=$user->getUserName();
                $_SESSION["userPassword"]=$user->getUserPassword();
                
                $_SESSION["userRole"]="User";
                $this->db->closeConnection();
                return true;
            }
            else
            {
                $_SESSION["errMsg"]="Somthing went wrong... try again later";
                $this->db->closeConnection();
                return false;
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