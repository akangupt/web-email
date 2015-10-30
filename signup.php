<html>
<head>
<style>
body
{
background-image:url('sign.jpg');
}
</style>
</head></br>
</br>
</br>
</br>
<h1><center><i><b><u> <span style="color:white">SIGNUP FORM </u></b></i></center></span></h1>
<form  method="post" action="InsertUser.php">
<br/>
<div><center><font size="5"<u><i><b><span style="color:white">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></u></font><input type="email" name="UserMail" /></center></span></div>
 <br/>
 <div><center><font size="5"<u><i><b><span style="color:white">Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></u></font><input type="text" name="UserName" /></center></span></div>
 <br/>
 <div><center><font size="5"<u><i><b><span style="color:white">ProfilePic:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></u></font><input type="text" name="pic" /></center></span></div>
 <br/>
 <div><center><font size="5"<u><i><b><span style="color:white">DateOfBirth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></u></font><input type="text" name="DOB" /></center></span></div>
 <br/>
<div><center><font size="5"<u><i><b><span style="color:white">Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i></u></font><input type="password" name="UserPassword" /></center></span></div>
<br/>
<div><center><font size="5"<u><i><b><span style="color:white">ConfirmPassword: &nbsp;</b></i></u></font><input type="password" name="Password" /></center></span></div>
<br/>
<br/>
<div><center> <input type="image" src="submit.gif" alt="Submit" width="48" height="48"></center></div>
<br/>
<?php
if(isset($_GET['error'])){
?>
<span style="color:yellow"><center>PASSWORDS DONT MATCH</center></span>
<?php
}
?>
</form>
</body>
</html>
