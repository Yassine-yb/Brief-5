<?php
/**
 * 
 */
class Salle
{
	static public function getAlls(){
		$stmt = DB::connect()->prepare('SELECT * FROM salle');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
		static public function getSalle($data){
		$id = $data['id'];
		try{
		$query = 'SELECT * FROM salle WHERE id=:id';
		$stmt = DB::connect()->prepare($query);
		$stmt->execute(array(":id" =>$id));
		$salle = $stmt->fetch(PDO::FETCH_OBJ);
		return $salle;


		}catch(PDOException $ex){
			echo "erreur".$ex->getMessage();
		}
	}
	static public function addsal($salles ){
		$stmt = DB::connect()->prepare('INSERT INTO salle (libellesalle,capacitesalle)VALUES(:libellesalle,:capacitesalle)');
		$stmt->bindParam(':libellesalle',$salles['libellesalle']);
		$stmt->bindParam(':capacitesalle',$salles['capacitesalle']);

		if ($stmt->execute()) {
			return 'ok';		
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;



	}
	static public function update($salles ){
		$stmt = DB::connect()->prepare('UPDATE salle SET libellesalle = :libellesalle,capacitesalle =:capacitesalle WHERE id = :id');
		$stmt->bindParam(':id',$salles['id']);
		$stmt->bindParam(':libellesalle',$salles['libellesalle']);
		$stmt->bindParam(':capacitesalle',$salles['capacitesalle']);

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
		$query = 'DELETE  FROM salle WHERE id=:id';
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