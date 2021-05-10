<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/HomeCont.php';

require 'conn.php';

class matieres{


    //select
    public function select(){

        $query = "SELECT * FROM matieres ORDER BY IdMat ASC";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }

    //ajouter
    public function Ajout($libelle, $enseignee){

        $query = "INSERT INTO `matieres` (`Libelle`, `Enseignee`) VALUES ('$libelle','$enseignee')";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //delete
    public function delete($idMat){

        $query = "DELETE FROM `matieres` WHERE IdMat=$idMat";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //update
    public function update($idMat,$libelle, $enseignee){


        try {

            $newobj = new DataBase();
            $conn = $newobj -> connect();

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE `matieres` SET `Libelle`='$libelle',`Enseignee`='$enseignee' WHERE IdMat=$idMat";

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














