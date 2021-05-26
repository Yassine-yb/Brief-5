<?php


require __DIR__.'/../model/ResSalles.php';


class ResSalleCont{

	// function index()
	// {
	// 	require __DIR__."/../view/reservation.php";
	// }

	function salleRes(){

		$obj= new ResSalles();
		$result = $obj -> select();
		require_once __DIR__.'/../view/salles/salleRes.php';
	}

	


	
}
