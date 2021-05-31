<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/HomeCont.php';

include_once 'conn.php';

class enseignants{

    function enseignants(){
		
		$obj= new enseignants();
        require_once __DIR__.'/../view/enseignant.php';

    }


    //select
    public function select(){

        // $query = "SELECT ens.IdEns  , ens.Nom , ens.Email, ens.Password, ens.Matiere  FROM `enseignants`ens, `matieres` m   WHERE ens.matiere= m.IdMat ORDER BY IdEns ASC";

        $query = "SELECT * FROM enseignants ORDER BY IdEns ASC";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }
    public function getMat(){

        $query1 = "SELECT * FROM matieres";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query1);
        
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }


    //ajouter
    public function Ajout($Nom, $Email, $Password, $Matiere){

        $query = "INSERT INTO `enseignants`(`Nom`, `Email`, `Password`, `Matiere`) VALUES ('$Nom','$Email','$Password', '$Matiere')";
        $query1 = "INSERT INTO `matieres`(`Libelle`, `Enseignee`) VALUES ('$Matiere','$Nom')";
        $query2 = "INSERT INTO `users`(`username`, `password`, `Role` ) VALUES ('$Nom','$Password','enseignant')";

        $newobj = new DataBase();
        $conn = $newobj -> connect();

        $result = $conn -> query($query);
        $result1 = $conn -> query($query1);
        $result2 = $conn -> query($query2);

    }

    //delete
    public function delete($IdEns){

        $query = "DELETE FROM `enseignants` WHERE IdEns=$IdEns";

        $newobj = new DataBase();
        $conn = $newobj -> connect();

        $result = $conn -> query($query);

    }

    
    //update
    public function update($IdEns, $Nom, $Email, $Password, $Matiere){


        try {

            $newobj = new DataBase();
            $conn = $newobj -> connect();

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE `enseignants` SET `Nom`='$Nom',`Email`='$Email', `Password`='$Password', `Matiere`='$Matiere' WHERE IdEns='$IdEns'";

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





class matieres{


    //ajouter
    public function Ajout($libelle, $enseignee){

        $query = "INSERT INTO `matieres` (`Libelle`, `Enseignee`) VALUES ('$libelle','$enseignee')";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result1 = $conn -> query($query);

    }

    //delete
    public function delete($idMat){

        $query = "DELETE FROM `matieres` WHERE IdMat='$idMat'";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result1 = $conn -> query($query);

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