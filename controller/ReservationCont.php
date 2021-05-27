<?php

include_once __DIR__ . '/../model/reservations.php';

class ReservationCont
{

	function index()
	{
		$obj = new Reservations();
		// $salles = $obj->selectsalle();
		// $cours= $obj-> getCours();
		
		require __DIR__ . "/../view/reservation.php";
	}


	function reservation()
	{

		$obj = new Reservations();
		$salles = $obj->selectsalle();
		$cours= $obj-> getCours();

		require_once __DIR__ . '/../view/salles/salleRes.php';
	}
	
	function Ajout()
	{
		if (isset($_POST['submit'])) {

			$date = $_POST['date'];
			$capacite = $_POST['capacite'];
			$heure = $_POST['heure'];
			$salle = $_POST['salle'];

			$obj = new Reservations();


			$result = $obj-> Ajout($date, $capacite, $heure, $salle);

			header("location:http://localhost/gestion-emplois/ReservationCont/reservation");
		}
	}

	function delete(){

		if (isset ($_POST ['delete'])){
			
			$IdCours=$_POST ['IdCours'];

			$obj= new Reservations();
			$result = $obj -> delete ($IdCours);
			header ("location:http://localhost/gestion-emplois/ReservationCont/reservation");
		}
	}
}
