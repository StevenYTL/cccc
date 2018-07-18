<?php

$db_Account = $_POST["account"];
$db_Password = $_POST["password"];
$db_Name = $_Post["name"];
$db_Phone = $_Post["phone"];
$db_Email = $_Post["email"];
$db_Birthday = $_Post["birthday"];
$db_Skype = $_Post["skype"];
$db_Gradyear = $_Post["gradyear"];

$link = @mysqli_connect('localhost','steven','42260914','test');

if(!$link) die("connect wrong");
mysqli_set_charset($link,'utf8');


$sql = "INSERT INTO register(Account, Password, Name, Phone, Email, Birthday, Skype, GradYear) VALUES ('$db_Account', '$db_Password', '$db_Name', '$db_Phone', '$db_Email', '$db_Birthday', '$db_Skype', '$db_Gradyear')";

$result = mysql_query($sql, $link) or die(mysql_error());

mysql_close($link);
header( "location:Register.php")

?>