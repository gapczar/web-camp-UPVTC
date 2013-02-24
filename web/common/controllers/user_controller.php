<?php

	class User_Controller {

		function static insert_user($username, $password, $email) {
			require_once('common/models/user_model.php');

			if (User::check_username($username) === FALSE) {
				User::insert_user($username, $password, $email);
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

	}
	
?>