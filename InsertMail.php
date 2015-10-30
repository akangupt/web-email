<?php
session_start();
include "classes.php";
if(isset($_POST['reciever']))
  {    		$mail=new mail();
		$mail->setreciever($_POST['reciever']);
		$mail->setsubject($_POST['subject']);
		$mail->setcontent($_POST['content']);
		$mail->InsertMailMessage($_POST['file'],$_POST['fileaddress']);
header("Location:Compose.php?success=1");
}

?>
