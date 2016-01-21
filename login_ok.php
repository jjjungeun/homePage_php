<?php
	if(!isset($_POST['email']) || !isset($_POST['pw'])) exit;
	
	$user_email = $_POST['email'];
	$user_pw = $_POST['pw'];
	
    if('user1@naver.com' != $user_email) {
		echo "<script>alert('your email is wrong.');history.back();</script>";
		exit;
	}

	if('pw1' != $user_pw) {
		echo "<script>alert('your password is wrong.');history.back();</script>";
		exit;
	}    
	
	session_start();
	$_SESSION['email'] = $user_email;
?>

<meta http-equiv='refresh' content='0; url=main.php'>