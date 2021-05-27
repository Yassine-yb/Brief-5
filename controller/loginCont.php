<?php
require_once __DIR__."/../model/users.php";
require_once __DIR__."/../model/loginMod.php";
require_once __DIR__."/../model/enseignants.php";

class LoginCont{

    public function index(){
        require __DIR__."/../view/login.php";
    }

    public function auth(){   
        
        require_once __DIR__. "/../model/conn.php";

        if(isset($_POST['login'])){

            // $username = $_POST['username'];
            // $password = $_POST['password'];
            $obj= new loginMod();
		    $result = $obj -> select( $_POST['username'], $_POST['password'] );

            // die(print_r($result));

            if(empty($result)) {
                
                header("location:http://localhost/gestion-emplois/");

            } else {

                session_start();
                $username = $_SESSION['username']=$result[0]['username'];
                $role = $_SESSION['Role']=$result[0]['Role'];
    
                if ($role != "Admin") {        
                    header("location:http://localhost/gestion-emplois/ReservationCont/index");
                } else {
                    header("location:http://localhost/gestion-emplois/homeCont");
                }
           
            }
        }

        
    }

    function logout(){

        if(isset($_POST['logout'])){

            $obj= new loginMod();
		    $result = $obj -> logout($username, $password);

            header("location:http://localhost/gestion-emplois/loginCont/index ");
        }
    }

            
}

?>