<?php 
if (isset($_POST['id'])) {
	$existSalle = new salleController();
	$existSalle->deleteSalle();
}

	
	

 ?>