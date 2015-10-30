<html>
<head>
<style>
body
{
background-image:url('login.jpg');
}
</style>
</head>
</br>
</br>
<h1><i><b><u><span style="color:white"><center>LOGIN FORM</center></span></u></b></i>
<form method="post" action="UserLogin.php">
<br/>
<br/>
<br/>
 <div><span style="color:white"><center><font size="5"<u><i><b>Email: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></u></font><input type="email" name="accountaddress" /></center></span></div>
 <br/>
<div><span style="color:white"><center><font size="5"<u><i><b>Password: &nbsp;&nbsp;&nbsp;&nbsp;</b></i></u></font><input type="password" name="accountpassword" /></center></span></div>
<br/>
 <div><center><input type="image" src="log.jpg" alt="Submit" width="48" height="48"></center></div>
<br/>
<?php
if(isset($_GET['error'])){
?>
<span style="color:yellow"><center>ERROR LOGIN</center></span>
<?php
}
?>
</form>
</body>
</html>
