<?php
/**
 * 
 */
class Ensignement
{
	static public function getAllen(){
		$stmt = DB::connect()->prepare('SELECT * FROM ensignement');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
	static public function getEnsignement($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM ensignement WHERE id=:id';

		$stmt = DB::connect()->prepare($query);
		$stmt->execute(array(":id" =>$id));
		$ensignement = $stmt->fetch(PDO::FETCH_OBJ);
		return $ensignement;


		}catch(PDOException $ex){
			echo "erreur".$ex->getMessage();
		}
	}
	static public function addens($data){
		$stmt = DB::connect()->prepare('INSERT INTO ensignement (nom,prenom,email,password)VALUES(:nom,:prenom,:email,:password)');
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':password',$data['password']);

		if ($stmt->execute()) {
			return 'ok';		
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;



	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE ensignement SET nom = :nom ,prenom = :prenom ,email = :email, password = :password WHERE id = :id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':password',$data['password']);
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
		$query = 'DELETE  FROM ensignement WHERE id=:id';
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