<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];

mysql_connect("localhost","root","");
mysql_select_db("indianrail");
$query="SELECT * FROM train WHERE fr='$m' and dest='$n' and date='$o'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0)
{
	echo "<table border='2'><tr><th>name</th><th>date</th><th>from</th><th>dest</th><th>atime</th><th>dtime</th></tr>";
while($row=mysql_fetch_array($result))
{

echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "</tr>";

}
echo "</table>";

}

else
{
echo "train not found";

}


?>