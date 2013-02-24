<?php 

	class Main_controller{

		function __construct(){
			require_once( "common/controllers/util.php" );
			if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != NULL){//uri is calling a function
				$chop = explode("/", $_SERVER['PATH_INFO']);
				$function = $chop[1];
				if(isset($function) && strlen(trim($function))>0 && is_callable(array($this, $function), FALSE)){//if function specified exists
					call_user_func(array($this, $function), $chop);
				}
				else {//else if function not exists
					$this->index();
				}
			}
			else{//else if uri not calling a function
				$this->index();
			}
		}

		public function index( $param ){
			require_once('common/views/header.php');
			require_once('common/views/nav.php');
			require_once('common/views/mainview.php');
			require_once('common/views/footer.php');
		}

		public function login(){
			require_once("common/models/user_model.php");
			echo User::login();	
		}

		public function vote() {
			require_once('common/views/header.php');
			require_once('common/views/nav.php');
			require_once('common/views/vote.php');
			require_once('common/views/footer.php');
		}

		public function topfive() {
			require_once('common/views/header.php');
			require_once('common/views/nav.php');
			require_once('common/views/top5.php');
			require_once('common/views/footer.php');
		}

	}
?>