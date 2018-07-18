<?php
	session_start();
	$_SESSION['Acc']="11";
	$_SESSION['Pwd']="11";
?>

<hmtl> 
<head> 
<title>註冊頁面</title> 

</head> 
<body> 
	<form name="f1" method="post" action="connectDB.php"> 
		Acccccount: <input type="text" name="account" /><br /> 
		Password: <input type="text" name="pwd"><br />  
		Name: <input type="text" name="name" /><br /> 
		Phone: <input type="text" name="phone" /><br /> 
		Email: <input type="text" name="email" /><br /> 
		Birthday: <input type="text" name="birthday" /><br /> 
		Skype: <input type="text" name="skype" /><br /> 
		Gradyear: <input type="text" name="gradyear" /><br /> 
		<input type="submit" /> <input type="reset" />
	</form>

	


</body> 
</html>