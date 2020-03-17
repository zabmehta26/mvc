<?php
	class homemodel{
		function home() {
			$con = mysqli_connect("localhost", "zab", "bla", "project");			
			$sql = "SELECT * FROM blogs order by created_at DESC";
			$result = $con->query($sql);
			include('view/home.php');
			$object = new homeview;
			$object->show($result);
			}
		}

?>
