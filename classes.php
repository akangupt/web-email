<?php
class user{
private $accountaddress,$accountpassword,$accountuser,$accountpic,$accountdob;

public function getaccountaddress(){
	return $this->accountaddress;
}

public function setaccountaddress($accountaddress){
	 $this->accountaddress=$accountaddress;
}
public function getaccountuser(){
	return $this->accountuser;
}

public function setaccountuser($accountuser){
	 $this->accountuser=$accountuser;
}
public function getaccountpic(){
	return $this->accountpic;
}

public function setaccountpic($accountpic){
	 $this->accountpic=$accountpic;
}
public function getaccountdob(){
	return $this->accountdob;
}

public function setaccountdob($accountdob){
	 $this->accountdob=$accountdob;
}
public function getaccountpassword(){
	return $this->accountpassword;
}

public function setaccountpassword($accountpassword){
	 $this->accountpassword =$accountpassword;
}


public function InsertUser(){
	include "conn.php";
	$req=$bdd->prepare("INSERT INTO hm_accounts(accountaddress,accountpassword,accountadusername,accountpic,accountdob) VALUES(:accountaddress,:accountpassword,:accountuser,:accountpic,:accountdob)");
	$req->execute(array(
		'accountaddress'=>$this->getaccountaddress(),
		'accountpassword'=>$this->getaccountpassword(),
		'accountuser'=>$this->getaccountuser(),
		'accountpic'=>$this->getaccountpic(),
		'accountdob'=>$this->getaccountdob()
		));
}

public function UserLogin(){
	include "conn.php";
	$req=$bdd->prepare("SELECT * FROM hm_accounts WHERE accountaddress=:accountaddress AND accountPassword=:accountpassword");

	$req->execute(array(
		'accountaddress'=>$this->getaccountaddress(),
		'accountpassword'=>$this->getaccountpassword()
	));

	if($req->rowCount()==0){
		header("Location:login.php?error=1");
		return false;
	}
	else{

		while($data=$req->fetch()){

	$this->setaccountpassword($data['accountpassword']);
                     $this->setaccountaddress($data['accountaddress']);
	  $this->setaccountuser($data['accountadusername']);
	$this->setaccountpic($data['accountpic']);
	$this->setaccountdob($data['accountdob']);

			header("Location:Home.php");
			return true;
		}
	}
}
}

class mail{
private $reciever,$subject,$content;
public function getreciever(){
	return $this->reciever;
}

public function setreciever($reciever){
	$this->reciever=$reciever;
}
public function getsubject(){
	return $this->subject;
}

public function setsubject($subject){
	$this->subject=$subject;
}

public function getcontent(){
	return $this->content;
}

public function setcontent($content){
	$this->content=$content;
}


public function InsertMailMessage($filename, $path){
	include"conn.php";
$req=$bdd->prepare("INSERT INTO msg(reciever,sender,subject,content) VALUES(:reciever,:sender,:subject,:content)");
$req->execute(array(
		'reciever'=>$this->getreciever(),
		'sender'=>($_SESSION['accountaddress']),
		'subject'=>$this->getsubject(),
		'content'=>$this->getcontent(),
		));
$to      = $this->getreciever();
$subject = $this->getsubject();
$message = $this->getcontent();
 $file = $path.$filename;
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);

 $header = "From: ".$_SESSION['accountaddress']."\r\n";
    $header .= "Reply-To: ".$_SESSION['accountaddress']."\r\n";
$header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
   $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .= $message."\r\n\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $header .= $content."\r\n\r\n";
    $header .= "--".$uid."--";
date_default_timezone_set('Asia/Calcutta');
$mail = mail($to, $subject, $message, $header);
}
}
class chat{
private $ChatId,$ChatUserId,$ChatText;

public function getChatId(){
	return $this->ChatId;
}

public function setChatId($ChatId){
	$this->ChatId=$ChatId;
}

public function getChatUserName(){
	return $this->ChatUserName;
}

public function setChatUserName($ChatUserName){
	$this->ChatUserName=$ChatUserName;
}

public function getChatText(){
	return $this->ChatText;
}

public function setChatText($ChatText){
	$this->ChatText=$ChatText;
}

public function InsertChatMessage()
{
include"conn.php";
$req=$bdd->prepare("INSERT INTO chats(ChatText,ChatUserName,ChatTime) VALUES(:ChatText,:ChatUserName,:ChatTime)");
$req->execute(array(
		'ChatUserName'=>$this->getChatUserName(),
		'ChatText'=>$this->getChatText(),
		'ChatTime'=>time()
		));
}

public function DisplayMessage()
{
include "conn.php";
$fiveMinutesAgo=time()-300;
$ChatReq=$bdd->prepare("SELECT * FROM chats WHERE ChatTime > '.$fiveMinutesAgo.' ORDER BY ChatTime ");
$ChatReq->execute();
while($DataChat=$ChatReq->fetch())
{
	$hoursAndMinutes = date('g:ia', $DataChat['ChatTime']);
	echo '<p><strong>' . $DataChat['ChatUserName']. '</strong>: <em>(' .$hoursAndMinutes. ')</em> ' . $DataChat['ChatText'] . '</p>';
}
}
}
?>


