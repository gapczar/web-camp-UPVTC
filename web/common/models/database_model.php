<?php
	class Database{

		private $con;

		function __construct(){
			$this->con = new PDO( "mysql:host=localhost;dbname=up;", "root", "root" );
		}
		
		/**
		* Function that returns a prepared statement based on the prepared query <code>$query</code> 
		*/
		function create_prepared_statement( $query ){
			if(isset($this->con) && $this->con != NULL)
				return $this->con->prepare( $query );
			else
				return FALSE;
		}

		/**
		* Function to clo
		*/
		function close(){
			$this->con = NULL;
		}
	}
?>