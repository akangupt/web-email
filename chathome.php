<?php
	session_start();
?>
<html>
<head>
<style>
body
{
background-image:url('background.jpg');
}
</style>
<link href="Style/Style.css" type"text/css" rel="stylesheet"/>
<script type="text/javascript" src="Js/jquery.js"></script>
<title>Chat Application Home</title>
</head>
<body >
<br/>
<br/>
<h2><center>Welcome <?php echo $_SESSION['accountuser'];?></span><center/></h2>
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
<input type="submit" id="logout" value="LOGOUT" /></form>
</div>
<form action="profile.php"  method="post">
<input type="submit"  id="user" value="<?php echo $_SESSION['accountuser']; ?>" /></form>
<div class="onlineusers">
<?php
include_once "conn.php";
$ChatOl=$bdd->prepare("SELECT * FROM onlineusers");
$ChatOl->execute();
$i=-20;
while($DataOl=$ChatOl->fetch()){
$i=$i+40;
echo "<p>";
echo '<img src="green.jpg" height="10" width="10" style="position:absolute;right:200px;top:150+$i px;">';
echo '<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $DataOl['UserName'].'</strong>';
echo "</p>";
}
?>
</div>
<div class="chatBox">
<div class="main"></div>
<div class="messageBox">
<form name="newMessage" class="newMessage" action=" InsertMessage.php"  method="post">
<div class="left">
<textarea name="ChatText" id="ChatText"></textarea>
</div>
<div class="right">
<input type="submit" id="newMessageSend" value="SEND" />
</div>
</form>
</div>
</div>
<br>
<br>
<script src="Js/refresh_message_log.js" type="text/javascript"></script>
</body>
</html>