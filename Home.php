<?php

	include "InsertMail.php";
?>
<html>
<head>
<link href="Style/Style2.css" type"text/css" rel="stylesheet"/>
<title>WEBMAIL</title>
<style>
body{
background-image:url('background1.jpg');
}
</style>
</head>
<body>
</br>
<h2><center>FRIEND'S WEBMAIL</center></h2>
<div class="menu">
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
echo '<img src="green.jpg" height="10" width="10" style="position:absolute;right:175px;top:150+$i px;">';
echo '<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $DataOl['UserName'].'</strong>';
echo "</p>";
}
?>
</div>
<div class="inbox">
<?php

include "conn.php";
$req=$bdd->prepare("SELECT * FROM msg WHERE reciever=:reciever   ");
$req->execute(array('reciever'=>$_SESSION['accountaddress'] ));
echo "<table text-align:center border>
<tr>
<th width=200px height=50px>From</th>
<th width=700px height=50px>Subject</th></tr>";


while($row = $req->fetch())

{

echo "<tr>";

echo "<td><center>" . $row['sender'] . "</center></td>";

echo "<td><b>"."<a href='open.php?id={$row['id']} '>" . $row['subject'] ."</a></b>"."</td>";

echo "</tr>";
}

echo "</table>";
?>


</div>
</body>
</html>
