<?php
//디비연결해서 저장 -> 아이디 비번 확인하는 것까지 
//로그인 유지하는 거 만들기 -> 체크 박스 선택 확인한 후 세션 유지 
	if(!isset($_POST['email']) || !isset($_POST['pw'])) exit;
	
	$user_email = $_POST['email'];
	$user_pw = $_POST['pw'];

	//디비연결 후 email 검색 
    if('user1@naver.com' != $user_email) {
		echo "<script>alert('your email is wrong.');history.back();</script>";
		exit;
	}
	// 디비 연결 후 
	if('pw1' != $user_pw) {
		echo "<script>alert('your password is wrong.');history.back();</script>";
		exit;
	}    
	
	session_start();
	$_SESSION['email'] = $user_email;
?>

<meta http-equiv='refresh' content='0; url=main.php'>