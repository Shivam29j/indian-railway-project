<?php
$m=$_POST['a'];
$n=$_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("indianrail");
$query="SELECT * FROM user WHERE email='$m' and password='$n'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0)
{
header("location:welcome.php");
}
else
{

header("location:home1.php");
}

$m=$_POST['a'];
$n=$_POST['b'];
?>