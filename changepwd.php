<?php
session_start();
include "conn.php";
include "classes.php";
$user= new user();
        $user->setaccountaddress($_SESSION['accountaddress']);
         $user->setaccountpassword(sha1($_POST['accountpassword']));
if((isset($_POST['accountpassword']) && ($user->UserLogin()==true ) )&& ($_POST['pass']==$_POST['pass1']))
{                
	$req=$bdd->prepare("UPDATE hm_accounts SET accountpassword=:accountpassword  WHERE accountaddress=:accountaddress ");
	$req->execute(array('accountpassword'=>(sha1($_POST['pass'])) ,'accountaddress'=>$_SESSION['accountaddress']));

header("Location:profile.php?success=1");
}
?>