<?php

	function insert_user($username, $password, $email) {
		require_once('models/user_model.php');
		User::insert_user($username, $password, $email);
	}

?>