<?php
session_start();
include "conn.php";
include "classes.php";
if(isset($_POST['accountuser']) && isset($_POST['accountdob']))
{                
	$req=$bdd->prepare("UPDATE hm_accounts SET accountadusername =:accountuser ,accountdob =:accountdob  WHERE accountaddress=:accountaddress ");
	$req->execute(array('accountuser'=>$_POST['accountuser'] ,
	'accountdob'=>$_POST['accountdob'] ,
	'accountaddress'=>$_SESSION['accountaddress']));
$_SESSION['accountuser']=$_POST['accountuser'];
$_SESSION['accountdob']=$_POST['accountdob'];
}

header("Location:profile.php?success=1");
?>