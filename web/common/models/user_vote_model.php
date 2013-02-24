<?php

	class User_Vote {

		/**
		 * Inserts a new vote to the specified app_id
		 */
		public static function insert_vote($username, $app_id) {
			require_once('common/models/database_model.php');

			$db = new Database();
			$stmt = $db->create_prepared_statement('INSERT INTO user_vote VALUES(:app_id, :username)');
			$stmt->execute(
				array(
					':app_id' => $app_id,
					':username' => $username
				)
			);
		}

	}

?>