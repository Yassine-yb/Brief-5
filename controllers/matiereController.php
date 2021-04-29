<?php

class matiereController{
	public function getAllMatiere(){
		$matieres = Matiere::getAllm();
		return $matieres;
	}
	public function getOneMatiere(){
		if (isset($_POST['id'])) {
			$data  = array(
				'id' =>$_POST['id'] 
		);
		
		$matiere = Matiere::getMatiere($data);
		return $matiere;
	}
	}

	public function addMatiere(){
		if (isset($_POST['submit'])) {
			$matieres= array(
				'libelle' =>$_POST['libelle']
				 );
			$result = Matiere::addmat($matieres);
			if ($result === 'ok')
			 {
			 	header('location:addmatiere');
				
			}else{
				echo $result;
			}
		}
	}
	public function updateMatiere(){
		if (isset($_POST['submit'])) {
			$matieres= array(
				'id' =>$_POST['id'] ,
				'libelle' =>$_POST['libelle'] );
			$result = Matiere::update($matieres);
			if ($result === 'ok')
			 {
			 	header('location:addmatiere');
				
			}else{
				echo $result;
			}
		}
	}
	public function deleteMatiere(){
		if (isset($_POST['id'])) {
			$data['id']= $_POST['id'];
			$result = Matiere::delete($data);
			if ($result === 'ok') {
				
				header('location:addmatiere');		}
		}else{
			echo $result;
		}
	}
}


 ?>