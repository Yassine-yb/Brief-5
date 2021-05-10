<?php


require __DIR__.'/../model/groupes.php';


class GroupeCont
{

	function groupe(){

		$obj= new groupes();
		$result = $obj -> select();
		require_once __DIR__.'/../view/groupes/groupe.php';
	}


	function Ajout(){
		
		if (isset ($_POST ['submit'])){

			$libelle=$_POST ['libelle'];
			$effectif=$_POST ['effectif'];

			$obj= new groupes();
			$result = $obj -> Ajout($libelle, $effectif);
			
			header ("location:http://localhost/gestion-emplois/groupeCont/groupe");
		}
	}

	function delete(){

		if (isset ($_POST ['submit'])){
			
			$IdGrp=$_POST ['IdGrp'];

			$obj= new groupes();
			$result = $obj -> delete ($IdGrp);
			header ("location:http://localhost/gestion-emplois/groupeCont/groupe");
		}
	}

	function update(){

	
		if (isset($_POST ['update'])){
		
			// print_r($_POST);

			$IdGrp=$_POST ['IdGrp'];
			$libelle=$_POST ['libelle'];
			$effectif=$_POST ['effectif'];
			

			$obj= new groupes();
			$result = $obj -> update ($IdGrp,$libelle, $effectif);
			header ("location:http://localhost/gestion-emplois/groupeCont/groupe");
		}
		
	}

	
	

	
}
