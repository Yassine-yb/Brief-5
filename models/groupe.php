<?php
/**
 * 
 */
class Groupe
{
	static public function getAllg(){
		$stmt = DB::connect()->prepare('SELECT * FROM groupe');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
	static public function getGroupe($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM groupe WHERE id=:id';

		$stmt = DB::connect()->prepare($query);
		$stmt->execute(array(":id" =>$id));
		$groupe = $stmt->fetch(PDO::FETCH_OBJ);
		return $groupe;


		}catch(PDOException $ex){
			echo "erreur".$ex->getMessage();
		}
	}
	static public function addgrp($groupes ){
		$stmt = DB::connect()->prepare('INSERT INTO groupe (libellegroupe,effectif)VALUES(:libellegroupe,:effectif)');
		$stmt->bindParam(':libellegroupe',$groupes['libellegroupe']);
		$stmt->bindParam(':effectif',$groupes['effectif']);

		if ($stmt->execute()) {
			return 'ok';		
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;



	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE groupe SET libellegroupe = :libellegroupe ,effectif = :effectif  WHERE id = :id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':libellegroupe',$data['libellegroupe']);
		$stmt->bindParam(':effectif',$data['effectif']);
		if ($stmt->execute()) {
			return 'ok';		
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;



	}
	static public function delete($data){
		$id = $data['id'];
		try{
		$query = 'DELETE  FROM groupe WHERE id=:id';
		$stmt = DB::connect()->prepare($query);
		$stmt->execute(array(":id" =>$id));
		if ($stmt->execute()) {
			return 'ok';		
		}
		

		}catch(PDOException $ex){
			echo "erreur".$ex->getMessage();
		}
	}
}


 ?>