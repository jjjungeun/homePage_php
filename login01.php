<html>
<body>
	<script type="text/javascript">
		function go_other_page(aa) {
 			if(aa==0) {
      			document.login01.action="join.php";
  			} 
  			document.login01.submit();
		}
	</script>

	<form method ="post" action="login_ok.php" name="login01">
		<table>
			<tr>
				<td>EMAILL  </td>
				<td><input type="text" name="email"/></td>
			</tr>

			<tr>
				<td>PASSWORD </td>
				<td><input type='password' name="pw"/></td>
			</tr>

			<tr>
				<td><input type="submit" value="LOGIN!" onclick="go_other_page(1)"/></td>
				<td><input type='checkbox' name='autologin'/>auto login</td>
			</tr>

			<tr><td><input type="button" value="JOIN US" onclick="go_other_page(0)"/></td></tr>
		</table>
	</form>
</body>
</html>
