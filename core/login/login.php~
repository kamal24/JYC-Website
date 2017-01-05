<?php

if(isset($_POST['sub'])) {
session_start();
//we will use for password encr hash('sha512', rand());
// variables used for checking
$_POST = array_map('mysql_real_escape_string',$_POST);
$username = $_POST['uname'];
$password = $_POST['pwd'];

if(empty($username) || empty($password)) 
{ 
       echo '<script type="text/javascript"> alert ("fill in all required lines");</script>';
}
else{
//include_once('../dbconnect.php');

//$query = "SELECT password FROM `$dbname`.`user` WHERE username = '$username'";
$pass=array("kamal123456","kamal2");
$user=array("kamal","gaurav");
$pass=array("kamal123456","kamal123456");
$user=array("kamal","gaurav");
if($username==$user[0] && $password==$pass[0] || $username==$user[1] && $password==$pass[1]){
	
setcookie('uname',"$username",time()+3600*24,"/");   
echo 'you have successfully logged in';  
header('Location:showadding.php');
}


}
//mysql_close($dbc);
}

?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../../css/style.css" >
    <style>
        #container{
            border:1px solid lightgray;
            width: 350px;
            height: 150px;
            margin: 13% 34% 10% 33%;
            box-shadow: 3px 3px 4px gray;
        }

        #loginform{
            margin: 4% 10% 10% 10%;
        }
         
        input{
           color: gray;
           font-size: 14px;
        }

        label{
            color:gray;
            font-size:16px;
        }

        input[type='submit']{
        width:100px;
        height:33px;}
    

#Loginhead{
margin-left:4%;
 color:darkgray;
}
    </style>
</head>
<body>
    <div id="container">
    <h3 id="Loginhead"> LOGIN IN HERE</h3>
    <form id="loginform" method="post" action="login.php">
        <table>
            <tr id="forError"></tr>
            <tr>
                <td>
                    <label name="luname"> User Name : </label>
                </td>
                <td>
                    <input type="text" name="uname"/>
                </td>
            </tr>
           
            <tr>
                <td>
                    <label name="lpwd"> Password : </label>
                </td>
                <td>
                    <input name="pwd" type="password"/>
                </td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" name="sub"/></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>	
