<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 2/1/14
 * Time: 6:33 PM
 * To change this template use File | Settings | File Templates.
 */
    $errors = "";
    $message = "";
    include_once('dbconnect.php');
    if($dbc){
        $table = $_GET['group'];
        $discussionid = $_GET['discussionID'];
        $query = "UPDATE `$dbname`.`$table` SET isactive=1 WHERE discussionID='$discussionid'";
        echo $query;
        mysql_query($query);
        mysql_close($dbc);
    }

?>