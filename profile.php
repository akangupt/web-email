<html>
<head>
<style>
body
{background-image:url('profile.jpg');
}
div.pic{
                   	float:left;
                   border:5px solid black;
}
div.home{
                    height: 120px;
	width: 120px;
	margin-left: 625px;
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
div.changepass{
                    height: 120px;
	width: 120px;
	margin-left: 625px;
                    background-image:url('changepass.jpg');

}
div.update{
                    height: 120px;
	width: 120px;
	margin-left: 625px;
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
<div class="pic">
<a href="changepic.php">
<img src="<?php echo ($_SESSION['accountpic']); ?> "width="500" height="600" ></a></div>
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
<div class="update" >
<a href="update.php">
<img src="update.jpg "width="120" height="120" ></a></div>
</div>
</br>
<div class="changepass">
<a href="changepass.php">
<img src="changepass.jpg "width="120" height="120" ></a></div>
</body>
</html>
