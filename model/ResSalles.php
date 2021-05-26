<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/ReservationCont.php';

include_once 'conn.php';

class ResSalles{


    //select
    public function select(){

        $query = "SELECT * FROM salles ORDER BY idSalle ASC";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }

    
}



