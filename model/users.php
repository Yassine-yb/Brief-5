<?php
require 'conn.php';
class users extends connection{

    private $username;
    private $password;

    public function __construct(){
        parent::__construct();
    }

    public function authentification($username,$password){
        
        $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $resultat =$this->conn->query($sql);
        
        if($resultat->rowCount()>0){
            $row=$resultat->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }else{
            return false;
        }
    }

}