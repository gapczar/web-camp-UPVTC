<?php

	class User {

		/**
		 * Inserts a new user into the database.
		 */
		public static function insert_user($username, $password, $email) {
			require_once('database_model.php');

			$db = new Database();
			$stmt = $db->create_prepared_statement('INSERT INTO user VALUES(:username, :password, :email)');
			$stmt->execute(
				array(
					':username' => $username,
					':password' => md5($password),
					':email' => $email
				)
			);
		}

		/**
		 * Check if the specified $username already exists
		 */
		public static function check_username($username) {
			require_once('database_model.php');

			$db = new Database();
			echo $username;
			$stmt = $db->create_prepared_statement('SELECT * FROM user WHERE username = :username');
			$stmt->execute(
				array(
					':username' => $username
				)
			);

			if ($stmt->rowCount() > 0)
				return FALSE;
			else
				return TRUE;
		}

	}

?>