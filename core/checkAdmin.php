<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 2/10/14
 * Time: 6:37 PM
 * To change this template use File | Settings | File Templates.
 */
    $error = "";
    if(isset($_POST['submit'])){
        $password = $_POST['password'];
        if($password == 'VARuag!$93'){
            setcookie('admin','loggedin',time()+3600*24*30, "/");
            //header('location: '.$_SERVER['HTTP_REFERER'].'');
        }else{
            $error = "Wrong password, Try again!";
        }
    }

?>
<!DOCTYPE html>
    <html>
    <head>
        <title> Check Admin </title>
        <style>
            .ga-error{
                color: red;
            }

        </style>
    </head>
    <body>

<form action="checkAdmin.php" method="post" enctype="multipart/form-data">
    <input type="password" name="password" placeholder="enter password here"/>
    <input type="submit" name="submit"/>
</form>
<?php
    if($error != ""){
        echo "<div class='ga-errors'>".$error."</div>";
    }
?>
