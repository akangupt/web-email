<?php
	session_start();
include "classes.php";
if(isset($_POST['ChatText'])){
		$chat=new chat();
		$chat->setChatUserName($_SESSION['accountuser']);
		$chat->setChatText($_POST['ChatText']);
		$chat->InsertChatMessage();
	
header("Location:chathome.php?success=1");

	}

?>
