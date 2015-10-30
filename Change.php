<?php
session_start();
include "conn.php";
include "classes.php";
if(isset($_POST['pic']))
{                
	$req=$bdd->prepare("UPDATE hm_accounts SET accountpic =:accountpic WHERE accountaddress=:accountaddress ");
	$req->execute(array('accountpic'=>$_POST['pic'] ,
	'accountaddress'=>$_SESSION['accountaddress']));
$_SESSION['accountpic']=$_POST['pic'];
header("Location:profile.php?success=1");
}
?>