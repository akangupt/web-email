<html>
<head>
<link href="Style/Style4.css" type"text/css" rel="stylesheet"/>
<title>SENT MAIL</title>
</head>
<body>
<img class="text" style="position:absolute;top:0;right:10px" src="text.jpg">
</br>
</br>
<b><p><font size="11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SENT M@IL</font></p></b>
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
<?php

session_start();
include "conn.php";
$req=$bdd->prepare("SELECT * FROM msg WHERE sender=:sender");
$req->execute(array('sender'=>($_SESSION['accountaddress'])));
echo "<table text-align:center border>
<tr>
<th width=200px height=50px>TO</th>
<th width=500px height=50px>Subject</th></tr>";


while($row = $req->fetch())

{

echo "<tr>";

echo "<td><center>" . $row['reciever'] . "</center></td>";

echo "<td><b>"."<a href='pop.php?id={$row['id']} '>" . $row['subject'] ."</a></b>"."</td>";

echo "</tr>";
}

echo "</table>";


?>


</body>
</html>