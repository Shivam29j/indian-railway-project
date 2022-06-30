<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];
$q=$_POST['e'];
$r=$_POST['f'];
$s=$_POST['g'];
$t=$_POST['h'];
if($m==""||$n==""||$o==""||$p==""||$q==""||$r==""||$s==""||$t=="")
{
	echo "Fill All Field";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("indianrail");
	$query="INSERT INTO user (name,father,mother,dob,email,phone,aadhar,password) VALUES('$m','$n','$o','$p','$q','$r','$s','$t')";
	mysql_query($query);
	header("location:home.php");
}
?>