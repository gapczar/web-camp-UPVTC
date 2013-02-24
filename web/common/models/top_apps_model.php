
<?php
	class Apps{

		function __construct(){
			require_once("common/database_model.php");
			$this->db = new Database();	
		}

		function get_top_five(){
			$query = "SELECT count(uv.app_id), a.name, a.icon
					   FROM user_vote as uv, app as a
					   WHERE uv.app_id = a.app_id
						   GROUP BY uv.app_id
						   ORDER BY uv.app_id ASC
						LIMIT 5";
			$statement = $this->db->create_prepared_statement( $query );
			$statement->execute();
			return $statement->fetchAll( PDO::FETCH_ASSOC );

		}

		function get_apps(){
			$query = "SELECT * FROM app";
			$statement = $this->db->create_prepared_statement( $query );
			$statement->execute();
			return $statement->fetchAll( PDO::FETCH_ASSOC );
		}
	}

	//demo for using the class
	$top = new Apps();
	$top5 = $top->get_top_five();
	$apps = $top->get_apps();
?>
