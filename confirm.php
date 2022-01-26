<?php
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("parlour",$con);
$res=mysql_query("insert into signin values('".$name."','".$email."','".$password."')",$con);
if($res==0)
{
header("Location: registererr.html");
}
else
{
header("Location: confirm.html");
}
mysql_close($con);
?>