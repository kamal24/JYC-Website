<?php
include_once('connect.php');
if(isset($_POST['submit']))
{
$clubname=$_POST['clubname'];

$query="drop table `forum`.`".$clubname."`";

mysql_query($query);

$query="delete from `forum`.`club` where `name`='$clubname'";
print_r($query);
mysql_query($query);
}

if(isset($_POST['submit1']))
{
$query="select `name` from `forum`.`club`";
$result=mysql_query($query);
if(mysql_num_rows($result)!=0)
{
$clubname=mysql_fetch_array($result);
while( $clubname=mysql_fetch_array($result))
{
$query="drop table `forum`.`".$clubname['name']."`";
mysql_query($query);
}
$query="delete from `forum`.`club`";
mysql_query($query);
}
}
?>
<html>
<body>
<form action="removeclub.php" method="post">
<p>Clubname:<input type="text" name="clubname"></p>
<p><input type="submit" name="submit" value="Remove">
<input type="submit" name="submit1" value="Remove-All"></p>
</form>
</body>

</html>