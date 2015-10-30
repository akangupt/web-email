<?php
	session_start();
?>
<html>
<head>
<link href="Style/Style.css" type"text/css" rel="stylesheet"/>
<link href="Style/Style1.css" type"text/css" rel="stylesheet"/>
<style>
body
{
background-image:url('compose.jpg');
}
</style>
<title>COMPOSE YOUR MAIL HERE</title>
</head>
<body >
</br>
</br>
<h2><center><span style="color:black">COMPOSE YOUR MAIL HERE</span><center/></h2>
</br>
</br>
<div class="menu">
<form action="Home.php"  method="post" >
<input type="submit" id="home" value="HOME" /></form>
<form action="Compose.php"  method="post" >
<input type="submit" id="compose" value="COMPOSE" /></form>
<form action="Home.php"  method="post" >
<input type="submit" id="inbox" value="INBOX" /></form>
<form action="sent.php"  method="post" >
<input type="submit" id="sentmail" value="SENT MAIL" /></form>
<form action="chathome.php"  method="post">
<input type="submit" id="cha" value="CHAT" /></form>
<form action="logout.php"  method="post">
<input type="submit" id="logout" value="LOGOUT" /></form>
</div>
<div class="mail">
<form method="post" action= "InsertMail.php"  id=usrform>
<font size="3"<i><b>&nbsp;To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></font><input type="email" size="100" name="reciever" />
<input type="image" src="send.jpg" alt="Submit" width="60" height="40" style="position:absolute;top:175px;left:1037px">
<br/>
<div><font size="3"<i><b>&nbsp;Subject:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></font><input type="text" size="100" name="subject"/></div>
<div><font size="3"<i><b>&nbsp;Attach File:</b></i></font><input type="text" size="20" name="file"/><font size="3"<i><b>&nbsp;&nbsp;&nbsp;FileAddress:</b></i></font><input type="text" size="58" name="fileaddress"/></div>
</form>
<textarea rows="18" cols="97" name="content" form="usrform"></textarea>
</div>
</body>
</html>