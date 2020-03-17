<?php
	class loginmodel{
		function login() {
			$user=$_POST['uname'];
			$pass=$_POST['psw'];
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "SELECT * FROM login WHERE username='$user' AND password='$pass'";
			$result = $con->query($sql);
			$row = $result->fetch_assoc();
			return $row;
			}
		}

?>
