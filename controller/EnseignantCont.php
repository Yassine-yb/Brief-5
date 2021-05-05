<?php


require __DIR__.'/../model/enseignants.php';


class EnseignantCont
{

	function enseignant(){

		$obj= new enseignants();
		$result = $obj -> select();
		require_once __DIR__.'/../view/enseignants/enseignant.php';
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
			
			$Nom=$_POST ['Nom'];
			$Email=$_POST ['Email'];
            $Password=$_POST ['Password'];

			$obj= new enseignants();
			$result = $obj -> update ($Nom, $Email, $Password);
			header ("location:http://localhost/gestion-emplois/EnseignantCont/enseignant");
		}
		
	}

	function edit(){

		
	}

	
}
