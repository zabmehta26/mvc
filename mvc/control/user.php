<?php
	class usercontrol{
		function home(){
			$usr = $_SESSION['user_id'];
			include('model/userhome.php');
			$obje = new userhomemodel;
			$obje->home($usr);
		}
	}

?>