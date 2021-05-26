<?php


require __DIR__.'/../model/matieres.php';


class MatiereCont
{

	function matiere(){

		$obj= new matieres();
		$result = $obj-> select();
		
		$ens= $obj-> getEns();

		require_once __DIR__.'/../view/matieres/matiere.php';
	}


	function Ajout(){
		
		if (isset ($_POST ['submit'])){

			$libelle=$_POST ['libelle'];
			$enseignee=$_POST ['enseignee'];

			$obj= new matieres();
			$result = $obj -> Ajout($libelle, $enseignee);
			
			header ("location:http://localhost/gestion-emplois/matiereCont/matiere");
		}
	}

	function delete(){

		if (isset ($_POST ['submit'])){
			
			$IdMat=$_POST ['IdMat'];

			$obj= new matieres();
			$result = $obj -> delete ($IdMat);
			header ("location:http://localhost/gestion-emplois/matiereCont/matiere");
		}
	}

	function update(){

	
		if (isset($_POST ['update'])){
		
			// print_r($_POST);

			$IdMat=$_POST ['IdMat'];
			$libelle=$_POST ['libelle'];
			$enseignee=$_POST ['enseignee'];
			

			$obj= new matieres();
			$result = $obj -> update ($IdMat,$libelle, $enseignee);
			header ("location:http://localhost/gestion-emplois/matiereCont/matiere");
		}
		
	}

	
	

	
}
