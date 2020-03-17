<?php
	class logincontrol {
		function login() {
			if(isset($_SESSION['user_id'])) {
				header("location: /mvc/index.php/user/home");
			}
			include('view/login.php');
		}

		function logincheck() {
			include('model/login.php');
			$object = new loginmodel;
			$return_value = $object->login();
			$_SESSION['user_id'] = $return_value['username'];
			// $_SESSION['access'] = $return_value['access'];
				header("location: /mvc/index.php/user/home");
		}

		function logout() {
				session_destroy();
				echo "logout succesfull";
				echo $_SESSION['user_id'];
				header("location: /mvc/");

	}
	}

?>
