<?php
	class blogmodel{
		function blog($value) {
			$con = mysqli_connect("localhost", "zab", "bla", "project");			
			$sql = "SELECT * FROM blogs WHERE id = '$value'";
			$result = $con->query($sql);
			include ('view/blog.php');
			$object = new blogview;
			$object->show($result);
			}
		}
?>
