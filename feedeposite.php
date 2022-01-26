<?php
$cname=$_REQUEST["cname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$type=$_REQUEST["type"];
$cakename=$_REQUEST["cakename"];
$weight=$_REQUEST["weight"];
$address=$_REQUEST["address"];
$city=$_REQUEST["city"];
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("parlour",$con);
//$sql="insert into customer details values('".$cname."','".$email."',
//'".$password."','".$type."','
//".$cakename."','".$weight."','".$adddress."''".$city."')";
$sql="insert into user_info values('$cname','$email','$password','$type','$cakename','$weight','$adress','$city')";
$q=mysql_query($sql,$con);
if($q)
{
header("Location: order confirm.html");
}
else 
{
header("Location:confirm3.html");
}
mysql_close($con);
?>