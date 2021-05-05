<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/HomeCont.php';

require 'conn.php';

class enseignants{


    //select
    public function select(){

        $query = "SELECT * FROM enseignants ORDER BY IdEns ASC";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }

    //ajouter
    public function Ajout($Nom, $Email, $Password){

        $query = "INSERT INTO `enseignants`(`Nom`, `Email`, `Password`) VALUES ('$Nom','$Email','$Password')";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //delete
    public function delete($IdEns){

        $query = "DELETE FROM `enseignants` WHERE IdEns=$IdEns";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //update
    public function update($Nom, $Email, $Password){


        try {

            $newobj = new DataBase();
            $conn = $newobj -> connect();

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE `enseignants` SET `Nom`='$Nom',`Email`='$Email',`Password`='$Password' WHERE IdEns=$IdEns";

            // Prepare statement
            $stmt = $conn->prepare($query);

            // execute the query
            $stmt->execute();

            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " Information UPDATED successfully";
        
        } catch(PDOException $e) {
        
            echo $query . "<br>" . $e->getMessage();
        
        }

        $conn = null;

    }

}



