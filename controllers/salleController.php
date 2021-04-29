<?php

class salleController{
	public function getAllSalle(){
		$salles = Salle::getAlls();
		return $salles;
	}
		public function getOneSalle(){
		if (isset($_POST['id'])) {
			$data  = array(
				'id' =>$_POST['id'] 
		);
		
		$salle = Salle::getSalle($data);
		return $salle;
	}
	}

	public function addSalle(){
		if (isset($_POST['submit'])) {
			$salles= array(
				'libellesalle' =>$_POST['libellesalle'] ,
				'capacitesalle' =>$_POST['capacitesalle'] ,
				
                 );
			$result = Salle::addsal($salles);
			if ($result === 'ok')
			 {
			 	header('location:addsalle');
				
			}else{
				echo $result;
			}
		}
	}

	public function updateSalle(){
		if (isset($_POST['submit'])) {
			$salles= array(
				'id' =>$_POST['id'] ,
				'libellesalle' =>$_POST['libellesalle'] ,
				'capacitesalle' =>$_POST['capacitesalle'] ,
				
                 );
			$result = Salle::update($salles);
			if ($result === 'ok')
			 {
			 	header('location:addsalle');
				
			}else{
				echo $result;
			}
		}
	}
	public function deleteSalle(){
		if (isset($_POST['id'])) {
			$data['id']= $_POST['id'];
			$result = Salle::delete($data);
			if ($result === 'ok') {
				
				header('location:addsalle');		}
		}else{
			echo $result;
		}
	}
}


 ?>