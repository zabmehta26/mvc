<?php
	class deletemodel{
		function delete($value) {
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "DELETE FROM `blogs` WHERE id = '$value'";
			$con->query($sql);
				header("location: /mvc/index.php/user/home");
			}
		}
?>-
