<?php 

$user_name="api username";
$password="api password";
$id="6 digit msg api id";

$msg=$_POST['msg'];
$number=$_POST['number'];

echo "<br/>Message:".$msg."<br/>number:".$number;


 $vars="user=".$user_name."&passwd=".$password."&senderId=".$id."&recipients=".$number."&message=".$msg;

if ($_POST["submit"]==true) 
{
	$curl=curl_init('link(url) of api');

	curl_setopt($curl, CURLOPT_POST,true);
	curl_setopt($curl, CURLOPT_POSTFIELDS,$vars);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
	$result=curl_exec($curl);

	curl_close($curl);
	echo "<br/>Data".$result;
	die("<br/>SMS has been sent");
}
 

?>

 