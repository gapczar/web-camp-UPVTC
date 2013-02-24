<?php

	class User_Controller {

		function insert_user($username, $password, $email) {
			require_once('../models/user_model.php');

			if (User::check_username($username) === FALSE) {
				echo "Username already exists!";
			}
			else {
				User::insert_user($username, $password, $email);
				echo "SUCCESS!";
			}
		}

	}
	
	$user = new User_Controller();
	$user->insert_user($_POST['username'], $_POST['password'], $_POST['email']);

?>