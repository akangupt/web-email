<html>
<html>
<head>
<style>
body
{background-image:url('profile.jpg');
}
div.pic{     width:500px;
	height:500px;
                    border:5px solid black;
background-image:url('change.jpg');
float:left;
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
div.update{
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
<form  method="post" action="Change.php">
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<font size="5"<u><i><b><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NewProfilePic:</b></i></u></font><input type="text" name="pic" size="15"/></span>
</br>
</br>
</br>
<div><center><input type="submit"value="Apply"  ></center></div>
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

