
<?php
	class Top_apps{
		// private $models = "common/models";
		private $models = "";
		private $statement;

		function __construct(){
			require_once($this->models."database_model.php");
			$db = new Database();
			
			$query = "SELECT count(uv.app_id), a.name, a.icon
					   FROM user_vote as uv, app as a
					   WHERE uv.app_id = a.app_id
						   GROUP BY uv.app_id
						   ORDER BY uv.app_id ASC
						LIMIT 5";
			$this->statement = $db->create_prepared_statement( $query );
		}

		function get_top_five(){
			$this->statement->execute();
			$result = $this->statement->fetchAll( PDO::FETCH_ASSOC );
			var_dump($result);
		}
	}

	$top = new Top_apps();
	$top->get_top_five();
?>
