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
			else {
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
		}

		/**
		* login function
		*/
		public static function login(){
			$result = User::check_username( $_POST['username'] );
			$server_response = array("result"=>FALSE, message => "");
			if($result !== FALSE ){ // user exists
				if(md5($_POST['password']) == md5($result['password'])){//correct password
					session_start();
					require_once("../controllers/util.php")
					$_SESSION['usename'] = $_POST['usename'];
					$server_response['result'] = TRUE;
					$server_response['message'] = Util::get_base_url( NULL );
				}
				else {//incorrect password
					$server_response['message'] = "Wrong password!";
				}
			}
			else {//username not found!
				$server_response['message'] = "Username not found!";
			}
			
			return json_encode($server_response);//json encode server response

		} 

	}

?>