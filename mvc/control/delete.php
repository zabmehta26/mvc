<?php
	class deletecontrol{
		function delete($value){
			include('model/delete.php');
			$obje = new deletemodel;
			$obje->delete($value);
		}
	}

?>