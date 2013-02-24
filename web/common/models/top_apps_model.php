<?php
	class Top_apps{
		function __construct(){
			private $models = "common/models";
			function get_top_five(){
				require_once($this->models."/database.php");
				$db = new Database();
				$db->create_prepared_statement( "SELECT * FROM " );
			}
		}
	}
?>