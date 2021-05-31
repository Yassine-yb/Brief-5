<?php

/**
 * 
 */
class HomeCont
{
	
	function index(){
		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/gestion-emplois/");
		}
		require __DIR__."/../view/home.php";
	}
	

	
}