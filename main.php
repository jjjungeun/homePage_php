<html>
<body>
MAIN PAGE !!!!!!!!!!!!!
<?php
	session_start();

	if(!isset($_SESSION['email'])) {
		echo "<meta http-equiv='refresh' content='0; url=login01.php'>";

		exit;
	}
	$email = $_SESSION['email'];
	// $user_name = $_SESSION['user_name'];
	echo "<p>HELLO. $email</p>";
?>
</body>
</html>