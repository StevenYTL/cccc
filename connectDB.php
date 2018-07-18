<?php

$db_Account ;
$db_Password ;
$db_Name ;
$db_Phone ;
$db_Email ;
$db_Birthday ;
$db_Skype ;
$db_Gradyear ;

$db_link = @mysqli_connect('localhost','steven','42260914','test');

if(!$db_link) die("connect wrong");
mysqli_set_charset($db_link,'utf8');



?>