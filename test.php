<?php
	session_start();
	$_SESSION['Acc']="11";
	$_SESSION['Pwd']="11";
?>

<hmtl> 
<head> 
<title>登入頁面</title> 
Log In ..  <br /> 

</head> 
<body> 

	<form name="f1" method="get" action="Confirm.php"> 
		Account: <input type="text" name="email" /><br /> 
		Password: <input type="password" name="pw"><br />  
		<input type="submit" value="Login" /> <input type="reset"/> 
		<input type="button" value="Register" onclick="location.href='Register.php'">
	</form>

<?php


</body> 
</html>