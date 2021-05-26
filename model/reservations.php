<?php

include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/ReservationCont.php';
include_once __DIR__.'/../model/groupes.php';

include_once 'conn.php';


    
    class Reservations{

        // select groupe
        function selectgroupe(){

            $query = "SELECT * FROM groupes ORDER BY IdGrp ASC";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query);
            return $result -> fetchAll (PDO::FETCH_ASSOC);
        }



        //select enseignant
        function selectenseignant(){

            $query = "SELECT * FROM enseignats ORDER BY IdEns ASC";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query);
            return $result -> fetchAll (PDO::FETCH_ASSOC);

        }

        //select salle
        function selectsalle(){

            $query = "SELECT * FROM salles ORDER BY IdGrp ASC";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query);
            return $result -> fetchAll (PDO::FETCH_ASSOC);
            
        }

        //insert
        function insert($date,$duree,$idEns,$idGrp,$idSalle){

            $query = "SELECT * FROM cours WHERE date='$date' AND duree='$duree' AND IdEns=$idEns";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn->query($query)->fetchAll();
            // return $result -> fetchAll (PDO::FETCH_ASSOC);

            if(!empty($result)){
                //ens non dispo
                  return -3;

            }else{

                $query = "SELECT * FROM cours where date='$date' and duree ='$duree' and IdGrp=$idGrp ";
                $result= $conn->query($query)->fetchAll();

                if(!empty($result)){
                    //group non dispo
                      return -2;

                }else{

                    $query = "SELECT * FROM cours WHERE date='$date' and duree ='$duree' and IdSalle = $idSalle ";
                    $result= $conn->query($query)->fetchAll();

                    if(!empty($result)){
                        //salle non dispo
                          return -1;

                    }else{

                        $grp=new GroupeModel();
                        $group=$grp->getone($idGrp);
                        $query2="select * from salle where id=$idS and  capacite >=".$group[0]['Effectif'];
                        $result= $conn->query($query2)->fetchAll();

                        if(empty($result)){
                            return 0;

                        }else{

                            $query="INSERT INTO `cours`(`date`,`duree`,`IdEns`,`IdGrp`,`IdSalle`) VALUES ('$date','$duree',$idEns,$idGrp,$idSalle)";
                            $result= $conn->query($query);
                            // die(print_r($query));
                            return 1;
                        }
            
                    }
                }
            }
         
        
           
              
        }

        //select
        function select(){

            $query ="SELECT Salles.Libelle, Groupes.Libelle, user.name,cours.date,cours.duree,cours.id FROM `cours`,`groupes`,`salles`,`users` WHERE cours.idSalle=salle.id AND cours.idGrp=group.id AND cours.idEns=user.id";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query);
            return $result -> fetchAll (PDO::FETCH_ASSOC);

        }

        
        //delete
        function Delete($id){

            $query = "DELETE FROM cours WHERE id=$id";
            $newobj = new DataBase();
            $conn = $newobj -> connect();
            $result = $conn -> query($query);
            return $result -> fetchAll (PDO::FETCH_ASSOC);
            
        }

    }
