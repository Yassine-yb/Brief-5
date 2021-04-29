<?php 
if (isset($_POST['id'])) {
	$existGroupe = new groupeController();
	$existGroupe->deleteGroupe();
}

	
	

 ?>