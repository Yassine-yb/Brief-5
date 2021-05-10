<?php


require __DIR__.'/../model/enseignants.php';


class EnseignantCont{

	function enseignant(){

	// 	if(isset( $_SESSION['enseignant']) &&  !empty($_SESSION['enseignant'])){

		$obj= new enseignants();
		$result = $obj -> select();
		require_once __DIR__.'/../view/enseignants/enseignant.php';

	// }else{
    //     header("location:http://localhost/gestion-emplois/loginCont/auth");
    // }
	}
	


	function Ajout(){
		
		if (isset ($_POST ['submit'])){

			$Nom=$_POST ['Nom'];
			$Email=$_POST ['Email'];
            $Password=$_POST ['Password'];

			$obj= new enseignants();
			$result = $obj -> Ajout($Nom, $Email, $Password);
			header ("location:http://localhost/gestion-emplois/EnseignantCont/enseignant");
		}
	}

	function delete(){

		if (isset ($_POST ['submit'])){
			
			$IdEns=$_POST ['IdEns'];

			$obj= new enseignants();
			$result = $obj -> delete ($IdEns);
			header ("location:http://localhost/gestion-emplois/EnseignantCont/enseignant");
		}
	}

	function update(){

	
		if (isset ($_POST ['update'])){
			
			$IdEns=$_POST ['IdEns'];
			$Nom=$_POST ['Nom'];
			$Email=$_POST ['Email'];
            $Password=$_POST ['Password'];

			$obj= new enseignants();
			$result = $obj -> update ($IdEns, $Nom, $Email, $Password);
			header ("location:http://localhost/gestion-emplois/EnseignantCont/enseignant");
		}
		
	}

	
	
}