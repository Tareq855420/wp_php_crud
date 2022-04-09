<?php

namespace App\classes;
use App\classes\Database;
class Auth extends Database
{
    private $email;
    private $password;
    private $con;
    private $sql;
    private $data;
    private $queryResult;

    public function __construct($data = null)
    {
        $this->con = $this->connect();
        if ($data)
        {
            $this->email = $data['email'];
            $this->password = md5($data['password']);
        }
    }
    public function login()
    {
        $this->sql = "SELECT * FROM users WHERE email = '$this->email' AND password= '$this->password' ";
        if ($this->queryResult = mysqli_query($this->con, $this->sql))
        {
            $this->data = mysqli_fetch_assoc($this->queryResult);
            if ($this->data)
            {
                session_start();
                $_SESSION['id'] = $this->data['id'];
                $_SESSION['name'] = $this->data['name'];
                header("Location: home.php");
            }
            else
            {
                return "Sorry..Email Or Password Is Invalid.";
            }
        }
        else
        {
            die('Query Problem..'.mysqli_error($this->con));
        }
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header("Location: action.php?status=index");
    }
}