<?php
	class blogcontrol {
		function blog($id) {
			include('model/blog.php');
			$object = new blogmodel;
			$object->blog($id);
		}
	}
?>