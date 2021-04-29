<?php 
if (isset($_POST['id'])) {
	$existMatiere = new matiereController();
	$existMatiere->deleteMatiere();
}

	
	

 ?>