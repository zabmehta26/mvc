<?php
	class editcontrol{
		function edit($value){
			include('model/edit.php');
			$object = new editmodel;
			$result = $object->editshow($value);
			include('view/edit.php');
			$object = new editview;
			$object->edit($result);
		}
		function editfeed($value) {
			include('model/edit.php');
			$object = new editmodel;
			$object->edit($value);
		}
	}

?>