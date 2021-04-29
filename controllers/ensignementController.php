<?php

class ensignementController{
	public function getAllEnsignement(){
		$Ensignements = Ensignement::getAllen();
		return $Ensignements;
	}
	public function getOneEnsignement(){
		if (isset($_POST['id'])) {
			$data  = array(
				'id' =>$_POST['id'] 
		);
		
		$ensignement = Ensignement::getEnsignement($data);
		return $ensignement;
	}
	}

	public function addEnsignement(){
		if (isset($_POST['submit'])) {
			$Ensignements= array(
				'nom' =>$_POST['nom'] ,
				'prenom' =>$_POST['prenom'] ,
				'email' =>$_POST['email'] ,
				'password' =>$_POST['password'] ,
				
                 );
			$result = Ensignement::addens($Ensignements);
			if ($result === 'ok')
			 {
			 	header('location:addensignement');
				
			}else{
				echo $result;
			}
		}
	}

public function updateEnsignement(){
		if (isset($_POST['submit'])) {
			$data= array(
				'id' =>$_POST['id'],
				'nom' =>$_POST['nom'] ,
				'prenom' =>$_POST['prenom'] ,
				'email' =>$_POST['email'] ,
				'password' =>$_POST['password']
                 );
			$result = Ensignement::update($data);
			if ($result === 'ok')
			 {
			 	header('location:addensignement');
				
			}else{
				echo $result;
			}
		}
	}
	public function deleteEnsignement(){
		if (isset($_POST['id'])) {
			$data['id']= $_POST['id'];
			$result = Ensignement::delete($data);
			if ($result === 'ok') {
				
				header('location:addensignement');		}
		}else{
			echo $result;
		}
	}
}


 ?>