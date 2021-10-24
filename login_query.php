<?php
	session_start();
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT COUNT(*) as count FROM `member` WHERE `username` = :username AND `password` = :password";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$row = $stmt->fetch();
		
		$count = $row['count'];
		
		if($count > 0){
			header('location:dash/home.php');
			$_SESSION['loggedin'] = true;
		}else{
			$_SESSION['error'] = "El usuario o contrasenia es erroneo";
			//session_unset();
			//session_destroy();
			header("Location: index.php");
		}
	}
	if(ISSET($_POST['logout'])){
	session_unset();
	session_destroy();
	header("Location: index.php");
				header("Location: index.php");
	}
?>
