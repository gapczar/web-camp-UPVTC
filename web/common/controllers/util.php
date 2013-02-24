<?php 

	class Util{

		static function base_url( $file ){
			$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
			return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']. $file;
		}

	}
?>