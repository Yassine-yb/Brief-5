<?php


require __DIR__.'/../model/salles.php';


class SalleCont
{

	function salle(){

		$obj= new salles();
		$result = $obj -> select();
		require_once __DIR__.'/../view/salles/salle.php';
	}


	function Ajout(){
		
		if (isset ($_POST ['submit'])){

			$libelle=$_POST ['libelle'];
			$capacite=$_POST ['capacite'];

			$obj= new salles();
			$result = $obj -> Ajout($libelle, $capacite);
			header ("location:http://localhost/gestion-emplois/salleCont/salle");
		}
	}

	function delete(){

		if (isset ($_POST ['submit'])){
			
			$IdSalle=$_POST ['IdSalle'];

			$obj= new salles();
			$result = $obj -> delete ($IdSalle);
			header ("location:http://localhost/gestion-emplois/salleCont/salle");
		}
	}

	function update(){

	
		if (isset ($_POST ['update'])){
			
			$libelle=$_POST ['libelle'];
			$capacite=$_POST ['capacite'];

			$obj= new salles();
			$result = $obj -> update ($libelle, $capacite);
			header ("location:http://localhost/gestion-emplois/salleCont/salle");
		}
		
	}

	
	

	
}
