<?php


  class connection {

    private $username = 'root';
    private $password = '';
    private $host = 'localhost';
    private $database='school_management_sys';

    protected $conn;

    public function __construct(){
      $this->conn=new PDO ("mysql:host=".$this->host.";dbname=".$this->database,$this->username, $this->password);

      if(!$this->conn){
          echo "Connection failed";
          exit;
      }
    
    }

  }


?>