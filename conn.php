<?php
try{
$bdd=new PDO("mysql:host=localhost;dbname=hmail","root","aka");
}catch(Exception $e){
	die("ERROR:".$e->getMessage());
}
?>