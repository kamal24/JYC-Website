<!--<html>
<head>

</head>
<body>
Enter user name:<input type="text" placeholder="enter user name" name="uname">
</body>
</html>-->
<?php
if(isset($_POST['submition'])) {
	$uname=$_POST['uname'];
	
	
	if(empty($uname)) 
    { 
       echo '<script type="text/javascript"> alert ("Please go back and fill in all required lines"); window.history.back()</script>';
    }
   else {
   include_once('../connect.php');
   $sql = "select * from `a1089916_Reso`.`user` where `username`='$uname'";
   $vara = mysql_query($sql);
  
   if(mysql_num_rows($vara)==0)
   {
       echo '<script type="text/javascript"> alert ("User name doesnot exist"); window.history.back()</script>';
   }
   else {
   $row=mysql_fetch_array($vara);
   $email=$row['email'];
   $password = substr(hash('sha512',rand()),0,12);
   $crack=md5($password);
   $sql = "update `a1089916_Reso`.`user` set `password`='$crack' where `username`='$uname'";
   $vara = mysql_query($sql);
	$subject = "Forget Password";
   $msg = "Password=$password for username=$uname";
   mail($email, $subject, $msg);
   echo '<script type="text/javascript"> alert ("successfully send password to ur mail"); window.history.back()</script>';
   /*header('Location:'.$_SERVER[HTTP_REFERER]);*/
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title> Forget Password</title>
    <link rel="stylesheet" href="../../css/style.css" >
    <style>
        *{color:gray;}
       
        td{
            width:50%;
        }

        input{
         width:200px;
         height:25px;
         font-size:14px;
}

        input[name='submition']{
            width:120px;
            height:38px;
            box-shadow: 3px 3px 3px gray;
        }

        table{
            padding-left: 15px;
        }
    
        div.formcontainer{
        color: gray;
        font-size: 16px;
        margin: 10% 35% 5% 33%;
        border: 1px solid lightgray;
        box-shadow: 3px 4px 3px lightgray;
        padding:10px;
        }
     
        h3{
        color: gray;
        font:sans-serif;
        margin-left:20px;
        }


    </style>
</head>
<body>
  <a href="../../index1.php">back to home</a>
  <div class="formcontainer">
    <h2>Forget Password : </h2>
    <form method="post" action="forgetpassword.php">  
     <table>

        <tr>
            <td><label> User Name : </label> </td>
            <td><input type="text" name="uname" placeholder="enter username"/></td>
        </tr>

        <br />
        <tr>
        <td colspan="2"><input type="submit" name="submition"/> </td>
        </tr>
        </table>
    </form>

</div>
    <script>

    </script>
</body>
</html>



