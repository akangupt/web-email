<?php
	session_start();
        include_once "conn.php";
	include "classes.php";
        $user= new user();
        $user->setaccountaddress($_POST['accountaddress']);
         $user->setaccountpassword(sha1($_POST['accountpassword']));
if($user->UserLogin()==true){
                    $_SESSION['accountaddress']=$user->getaccountaddress();
	$_SESSION['accountuser']=$user->getaccountuser();
	 $_SESSION['accountpic']=$user->getaccountpic();
	 $_SESSION['accountdob']=$user->getaccountdob();
$ol=$bdd->prepare("INSERT INTO onlineusers (UserName) VALUES(:OlUser)");
	$ol->execute(array(
	'OlUser'=>$_SESSION['accountuser']
	));
        setcookie("usera",$user->getaccountuser(),time()+86400);
}
?>