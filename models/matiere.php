<?php
/**
 * 
 */
class Matiere
{
	static public function getAllm(){
		$stmt = DB::connect()->prepare('SELECT * FROM matiere');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
	static public function getMatiere($data){
		$id = $data['id'];
		try{
		$query = 'SELECT * FROM matiere WHERE id=:id';
		$stmt = DB::connect()->prepare($query);
		$stmt->execute(array(":id" =>$id));
		$matiere = $stmt->fetch(PDO::FETCH_OBJ);
		return $matiere;


		}catch(PDOException $ex){
			echo "erreur".$ex->getMessage();
		}
	}
	static public function addmat($matieres ){
		$stmt = DB::connect()->prepare('INSERT INTO matiere (libelle)VALUES(:libelle)');
		$stmt->bindParam(':libelle',$matieres['libelle']);

		if ($stmt->execute()) {
			return 'ok';		
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;



	}
	static public function update($matieres ){
		$stmt = DB::connect()->prepare('UPDATE matiere SET libelle = :libelle WHERE id = :id');
		$stmt->bindParam(':id',$matieres['id']);
		$stmt->bindParam(':libelle',$matieres['libelle']);

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
		$query = 'DELETE  FROM matiere WHERE id=:id';
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