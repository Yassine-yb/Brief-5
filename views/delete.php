<?php 
if (isset($_POST['id'])) {
	$existEnsignement = new ensignementController();
	$existEnsignement->deleteEnsignement();
}

	
	

 ?>