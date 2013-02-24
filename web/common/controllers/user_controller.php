<?php

	class User_Controller {

		public function static insert_user($username, $password, $email) {
			require_once('../models/user_model.php');

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