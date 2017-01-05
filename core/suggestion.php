<?php
if(isset($_POST['send'])) 
{
 include_once('connect.php');
 $name=$_POST['name'];
 $query=$_POST['query'];
$query1="insert into `forum`.`suggestion`(`name`,`suggestion`) values ('$name','$query')";
mysql_query($query1);
}
?>

<style type="text/css">

</style>
<link rel="stylesheet" href="css/style.css"> 

<div class="container">
<div id="suggest">
<h1>Welcome To Suggestion Page</h1>
<form action="suggestion.php" method="post">

<p>Your Name:<input type="text" name="name"></p>
<p>Suggestions:<textarea type="text" name="query"></textarea></p>
<input type="submit" name="send" value="send">

</form>
</div>
</div>





