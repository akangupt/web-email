<html>
<html>
<head>
<style>
body
{background-image:url('profile.jpg');
}
div.pic{     width:400px;
	height:300px;
                    border:3px solid black;
                    float:left;
 background-image:url('updated.jpg');
}
div.home{
                    height: 120px;
	width: 120px;
	margin-left: 625px;
                   }
div.changepass{
                    height: 120px;
	width: 120px;
	margin-left: 625px;
                    background-image:url('changepass.jpg');

}
div.userdob{
                    height: 120px;
	width: 120px;
	margin-left: 625px;
                    background-image:url('bday.jpg');
border:1px white;
}
div.userdob p
{
margin-top:40px ;
font-weight:bold;
color:#ffffff;
}
div.username{
                    height: 100px;
	width: 120px;
	margin-left: 625px;
                    background-image:url('name.jpg');
border:1px white;
}
div.username p
{
margin-top:40px ;
margin-left:20px;
font-weight:bold;
color: black;
}
</style>
</head>
<body>
<?php
session_start();
?>
</br>
</br>
</br>
</br>
<div class="pic">
</br>
</br>
</br>
<form  method="post" action="updateinfo.php">
<font size="5"<u><i><b><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USERNAME:&nbsp;&nbsp;&nbsp;</b></i></u></font><input type="text" name="accountuser" size="15"/></span>
</br>
</br>
<font size="5"<u><i><b><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATEOFBIRTH:</b></i></u></font><input type="text" name="accountdob" size="15"/></span>
</br>
</br>
<div><center><input type="submit" value="UPDATE"  ></center></div>
</div>
<div class="home">
<a href="Home.php">
<img src="home.jpg" ></a></div>
<div class="username" >
<p>
</br>
</br>

     <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;<font size="4.5">'.$_SESSION['accountuser'].'</font>'; ?> 
</p>
</div>


<div class="userdob" >
<p>
</br>
</br>
     <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;<font size="4.5">'.$_SESSION['accountdob'].'</font>'; ?> 
</p>
</div>
</br>
<div class="changepass">
<a href="changepass.php">
<img src="changepass.jpg "width="120" height="120" ></a></div>

</body>
</html>
