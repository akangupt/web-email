<?php
include "classes.php";
$user=new user();
if(((isset($_POST['UserMail'])&&isset($_POST['UserPassword']) ) && (isset($_POST['UserName']) && isset($_POST['DOB'])) )&&(($_POST['UserPassword'])==($_POST['Password']) ))
{
$user->setaccountaddress($_POST['UserMail']);
$user->setaccountuser($_POST['UserName']);
$user->setaccountdob($_POST['DOB']);
$user->setaccountpic($_POST['pic']);
$user->setaccountpassword(sha1($_POST['UserPassword']));
$user->InsertUser();
header("Location:login.php?success=1");
}
else
{
header("Location:SignUp.php?error=1");
}
?>