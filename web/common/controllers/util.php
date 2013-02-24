<?php 

	class Util{

		static function base_url( $file ){
			$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
			$hostname = getenv('HOSTNAME');
			return $protocol . "://" . $_SERVER['HTTP_HOST'] .$hostname."/". $file;
		}

	}
?>