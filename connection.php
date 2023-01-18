<?php
// Just add comment

	function Conn(){
		$user = 'root';
		$password = 'a500456@';
		$db = 'db_student_register';
		$host = '127.0.0.1:8889';
		$port = 8889;
		// Create connection
		$conn = new mysqli($host, $user, $password, $db);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}
?>

