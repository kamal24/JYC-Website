<?php
if(isset($_COOKIE['uname']))
{
include_once('dbconnect.php');
$query="select * from `$dbname`.`suggestion`";
$result=mysql_query($query);
echo "<table border='1px'>";
echo "<tr><td>username</td><td>email</td><td>suggestion</td></tr>";
while($row=@(mysql_fetch_array($result))) {
	$name=$row['name'];
	$suggest=$row['suggestion'];
	$email=$row['email'];
	echo "<tr><td>$name</td><td>$email</td>"."<td>$suggest</td></tr>";
	}
echo "</table";
}
else {
	echo "first login";
	}
?>