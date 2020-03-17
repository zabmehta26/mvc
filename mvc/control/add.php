<?php
	class addcontrol{
		function add(){
			include('view/add.php');
		}
		function addfeed() {
			include('model/add.php');
			$object = new addmodel;
			$object->add();
		}
	}

?>
