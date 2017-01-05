<?php
if(isset($_POST['submit']))
{
$member_name=$_POST['member'];
$description=$_POST['description'];
$post=$_POST['post'];
$contact_info1=$_POST['contact-info1'];
$contact_info2=$_POST['contact-info2'];
include_once('core/connect.php');


$query="insert into `forum`.`'$clubname'`(`name`,post,contactinfo) values('$coordinator','co-ordinator','$contact_info1')";
mysql_query($query);
$query="insert into `forum`.`'$clubname'`(`name`,post,contactinfo) values('$vice_coordinator','vice-co-ordinator','$contact_info2')";
mysql_query($query);
}
?>
<html>


<body>
<form action="addmember.php" method="post">
<p>member-name<input type="text" name="member"></input></p>
<p>post<input type="text" name="co-name1"></input></p>
<p>email-id<input type="text" name="contact-info1"></input></p>
<p>mobileno<input type="text" name="contact-info2"></input></p>
<input type="submit" name="submit" value="Add">
</form>
</body>

</html>