<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 10/1/13
 * Time: 3:49 AM
 * To change this template use File | Settings | File Templates.
 */

if(isset($_COOKIE['uname'])){
    setcookie('uname','',time(),'/');
    
     header("Location:login.php");
     ?>
    <!-- <html>
     <head>
      <script type="text/javascript" >
      alert('successfully logged out baby');
      history.go(-1);
     </script>
     </head>
     <body>
 
     </body>
    </html>-->
   <?php

}?>