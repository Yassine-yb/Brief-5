<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/HomeCont.php';

include_once 'conn.php';

class salles{


    //select
    public function select(){

        $query = "SELECT * FROM salles ORDER BY idSalle ASC";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }

    //ajouter
    public function Ajout($libelle, $capacite){

        $query = "INSERT INTO `salles` (`Libelle`, `Capacite`) VALUES ('$libelle','$capacite')";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //delete
    public function delete($idSalle){

        $query = "DELETE FROM `salles` WHERE idSalle=$idSalle";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //update
    public function update($IdSalle,$libelle, $capacite){


        try {

            $newobj = new DataBase();
            $conn = $newobj -> connect();

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE `salles` SET `Libelle`='$libelle',`Capacite`=$capacite WHERE IdSalle=$IdSalle";

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













// class salles extends connection{

//     private $idSalle;
//     private $libelle;
//     private $capacite;

//     public function __construct(){
//         parent::__construct();
//     }

//     public function read(){
        
//         $sql= "SELECT * FROM salles";
//         $query=$this->conn->query($sql);
//         return $query->fetchAll(PDO::FETCH_ASSOC);  
//     }

//     function delete($idSalle){

//         $sql="DELETE * FROM salle where id=$idSalle";
//         $query=DB::connect()->query($sql);
   
//     }

//     function save($Libelle,$capacite){

//         $sql="INSERT INTO `salle`(`Libelle`, `Capacite`) VALUES ('$Libelle','$Capacite')";
//         $query=DB::connect()->query($sql);
//     }

//     function edit($idSalle){

//         $sql="SELECT * FROM salle WHERE id=$idSalle";

//         $query=DB::connect()->query($sql);
//         return $query->fetchAll();
//     }

//     function update($libelle,$capacite,$idSalle){
       
//         $sql="UPDATE salle SET Libelle='$Libelle',Capacity='$Capacite' WHERE Id = $IdSalle";
//         $query=DB::connect()->query($sql);
//     }


// }

