<?php

include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/ReservationCont.php';
include_once __DIR__.'/../model/reservations.php';

include_once 'conn.php';


    
    class Reservations{

        //select salle
        function selectsalle(){

            $query = "SELECT * FROM salles ";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query);
            return $result -> fetchAll (PDO::FETCH_ASSOC);
            
        }

        // public function select(){    
    
        //     $query = "SELECT * FROM cours ORDER BY IdCours ASC";
        //     $newobj = new DataBase();
        //     $conn = $newobj -> connect();
        //     $result = $conn -> query($query);
        //     return $result -> fetchAll (PDO::FETCH_ASSOC);
    
        // }
        public function getCours(){

            $query1 = "SELECT * FROM cours ORDER BY IdCours ASC";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query1);

            return $result -> fetchAll (PDO::FETCH_ASSOC);
    
        }

        public function Ajout ($date, $capacite, $heure, $salle){

            $query = "INSERT INTO `cours`(`Date`, `Capacite`, `Heure`, `Salle`) VALUES ('$date', '$capacite', '$heure','$salle')";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query);

        }


        //delete
        public function delete($idCours){

            $query = "DELETE FROM `cours` WHERE idCours=$idCours";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query);

        }



    }
