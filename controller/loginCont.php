<?php
require __DIR__."/../model/users.php";
require_once __DIR__."/../model/enseignants.php";

class LoginCont{

    public function index(){
        require __DIR__."/../view/login.php";
    }

    public function auth(){


        session_start();

        if(isset($_SESSION['user'])){
            
            header("location: general message.php");
        }
        
        require "conn.php";

        if(isset($_POST['login'])){

            $user = $_POST['username'];
            $pass = md5($_POST['password']);
            $message = "";

            if(empty($user) || empty($pass)) {
                
                $messeg = "Username/Password cannot be empty";

            } else {

                $query = $conn->prepare($sql);
                $query->execute(array($user,$pass));

                if($query->rowCount() >= 1) {

                    $_SESSION['user'] = $user;
                    $_SESSION['time_start_login'] = time();
                    header("location: general message.php");

                } else {

                    $message = "Username/Password is not correct";
                }
            }
        }

        
    }

   
    // session_start();
    // session_destroy();
    // header("location: index.php");

            
}

?>