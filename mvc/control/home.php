<?php
	class homecontrol{
		function home(){
			include('model/home.php');
			$obje = new homemodel;
			$obje->home();
		}
	}

?>