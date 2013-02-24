<?php

	class User_Vote_Controller {
		function insert_vote($username, $app_id) {
			require_once('user_vote_model.php');
			User_Vote::insert_vote($username, $app_id);
		}
	}
	
?>