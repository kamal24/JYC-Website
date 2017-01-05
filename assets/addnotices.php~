<?php
if(isset($_COOKIE['uname'])) {
include_once('dbconnect.php');
if(isset($_POST['submit']) )
{
$_POST = array_map('mysql_real_escape_string',$_POST);
$notice=$_POST['notices'];
$link=$_POST['link'];

$query="insert into `$dbname`.`notices`(`id`,`name`,`link`)  values (null,'$notice','$link')";
$result=mysql_query($query);
echo $result;

}

if(isset($_POST['show']) )
{
$query="select * from `$dbname`.`notices`";
$result=mysql_query($query);
echo "<table border='1px'>";
echo "<tr>";
echo "<td>id</td>";
echo "<td>name</td>";
echo "<td>link</td>";
echo "</tr>";
while($row=mysql_fetch_array($result)) 
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['link']." </td>";
echo "</tr>";
}
echo "</table>";
}

if(isset($_POST['delete1']) )
{
$_POST = array_map('mysql_real_escape_string',$_POST);
$id=$_POST['id'];
$query="delete from `$dbname`.`notices` where `id`='$id'";
$result=mysql_query($query);
echo $result;

}


?>
<form action="addnotices.php" method="post" enctype="multipart/form-data">
<p>notice:<input type="text" name="notices"></input></p>
<p>link:<input type="text" name="link"></input></p>
<p><input type="submit" name="submit" value="Add"></p>
<p><input type="submit" name="show" value="Show All Notices"></p>
<p>id:<input type="text" name="id"></input></p>
<p><input type="submit" name="delete1" value="Delete"></p>
</form>

<?php
}
else{
echo 'you have to login first';
}
?>