<html>
<head>
<link href="Style/Style3.css" type"text/css" rel="stylesheet"/>
<title>MAIL</title>
</head>
<body>
<img class="thumbnail" style="position:absolute;top:100px;" src="email.jpg">
</br>
</br>
<b><p><font size="11"><center>SENT M@IL</center></font></p></b>
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
echo "</br>";
echo " <b>&nbsp;&nbsp;&nbsp;TO : </b>"  . $row['reciever'] ;
echo "</br>";
echo "<b> &nbsp;&nbsp;&nbsp;SUBJECT : </b>"  . $row['subject']  ;
echo "</br>&nbsp;&nbsp;&nbsp;" . $row['content'];
?>
</div>
</body>
</html>