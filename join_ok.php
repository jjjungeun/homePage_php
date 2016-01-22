<?php
//post로 받은 변수 저장.
$user_email = trim($_POST['email']);
$user_name = $_POST['user_name'];
$user_pw = $_POST['pw'];
$user_pwcheck = $_POST['pwcheck'];

//만약 전달값이 하나라도 없으면 뒤로 
if($user_email == null || $user_name == null || $user_pw == null || $user_pwcheck == null) {
	echo "<script>alert('empty'); history.back(); </script>";
	Header("Location:join.php"); 
}

//email값이 -> @가 없으면, .가 없으면, 한글이라면 뒤로 
//만약 전달값 중 pw != pw_check 면 뒤로 
else {	
	if(strchr($user_email, '@') === FALSE || strchr($user_email, '.') === FALSE) {
		echo "<script>alert('email address is wrong');history.back();</script>";
		Header("Location:join.php"); 
	} else if($user_pw !== $user_pwcheck) {
		echo "<script>alert('check your password');history.back();</script>";
		Header("Location:join.php"); 
	} else if(preg_match("/[\xA1-\xFE][\xA1-\xFE]/", $user_email)) {
		echo "<script>alert('check your email');history.back();</script>";
		Header("Location:join.php");
	} else {
		//email값이 중복되어 있다면 뒤로(디비에서 email값 찾아보기), 메시지 전달 ( 회원 등록 되어 있는 상태입니다.)
		//디비에 연결해서 회원정보 저장 

		//메일 보낼 때 설정값을 저장. 
		$Headers .= "from: 정은아아안 <formmail> \r\n";
		$Headers .= "Content_Type: text/html; charset=EUC-KR \r\n";

		//메일 보낼 내용 저장 
		$subject = trim("welcome");
		$content = 'welcome, join us!';

		//메일 전송 
		mail($user_email, $subject, $content, $Headers);

		//페이지 이동 
		Header("Location:login01.php");
	}	
}
?>

