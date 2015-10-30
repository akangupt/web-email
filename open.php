<?php
session_start();
?>
<html>
<head>
<link href="Style/Style3.css" type"text/css" rel="stylesheet"/>
<title>MAIL</title>
<style>
body
{
background-image:url('mail.jpg');
}
</style>
</head>
<body>
</br>
</br>
<b><p><font size="11"><center>M@IL</center></font></p></b>
</br>
</br>
</br>
<div class="menu">
<form action="home.php"  method="post">
<input type="image" src="home.jpg" alt="Submit" width="100" height="100" style="position:absolute;top:175px;left:1037px">
</form>
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
<div class='message'>
<?php
include "conn.php";
$req=$bdd->prepare("SELECT * FROM msg WHERE id=:id");
$req->execute(array('id'=>$_REQUEST['id']));
$row=$req->fetch();
echo " </br><b>&nbsp;&nbsp;&nbsp;&nbsp;FROM : </b>&nbsp;&nbsp;&nbsp;"  . $row['sender'] ;
echo "</br>";
echo "<b>&nbsp;&nbsp; SUBJECT : </b>"  . $row['subject']  ;
echo "</br>&nbsp;&nbsp;&nbsp;&nbsp;" . $row['content'];
echo "<a href='reply.php?id={$row['id']} '>".'<img src="reply.jpg"  style=position:absolute;top:370;left:800;>'."</a>";
?>
</div>
</br>
</body>
</html>