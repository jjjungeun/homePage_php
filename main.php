<?php
	session_start();

	if(!isset($_SESSION['email'])) {
		echo "<meta http-equiv='refresh' content='0; url=login01.php'>";

		exit;
	}
	$email = $_SESSION['email'];
	// $user_name = $_SESSION['user_name'];
	echo "<p>HELLO. $email</p>";

	//만들어야할 버튼 -> 로그아웃, 동영상->우선 애니만. 
?>
