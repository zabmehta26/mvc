<?php
	class editmodel{
		function editshow($value) {
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "SELECT * FROM blogs WHERE id = '$value'";
			$result = $con->query($sql);
			return $result;
		}

		function edit($value) {
			$title=$_POST['title'];
			$usr = $_SESSION['user_id'];
			$img = $_FILES['image']['name'];
			$tmp_img = $_FILES['image']['tmp_name'];                      //stores the temp name of image
			$img_locate = "img/" . $img;                                   //locate the image in the folder
			move_uploaded_file($tmp_img,$img_locate);
			$content=$_POST['contents'];
			$con = mysqli_connect("localhost", "root", "root", "project");
			$sql = "UPDATE blogs SET title = '$title', image = '$img_locate', content = '$content' WHERE id =
				'$value' and username = '$usr'";
			$con->query($sql);
				header("location: /mvc/index.php/user/home");
			}
		}
?>
