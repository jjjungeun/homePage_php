<?php
	$user_email = $_POST['email'];
	$user_pw = $_POST['pw'];
	
	session_start();
	$_SESSION['email'] = $user_email;
	$_SESSION['user_name'] = $members['email']['name'];
?>

<meta http-equiv='refresh' content='0; url=main.php'>

