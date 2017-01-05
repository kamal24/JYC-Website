<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 2/7/14
 * Time: 1:55 AM
 * To change this template use File | Settings | File Templates.
 */
include_once('dbconnect.php');
$message = "";
$errors = "";
if($dbc){
    if(isset($_POST['submit'])){
        $link = $_POST['link'];
        $event = $_POST['event'];
        $desc = $_POST['description'];
        $dbquery = "INSERT INTO `$dbname`.`videorecord` (`id`,`link`,`description`,`event`) VALUES (null, '$link','$desc','$event')";
        if(mysql_query($dbquery)){
            $message = "video added successfully";
        }else{
            $errors = "uploading failed";
        }
    }
}else{
    $errors =  "error connecting to database";
}?>
<!DOCTYPE html>
<html>
<head>
    <title>
        image Uploader file
    </title>
    <style>
        .ga-errors{
            color: red;
        }

        .ga-success{
            color: green;
        }
    </style>
</head>
<body>
<form action="addEvent.php" method="post" enctype="multipart/form-data">
    <input placeholder="add new event " name="event_name"/>
    <input type="submit" name="eventsubmit"/>
</form>
<div> Caution! There is no limit on file</div>
<form action="videoUploader.php" method="post" enctype="multipart/form-data">
    <label for="file">Video Link :</label>
    <input type="text" name="link">
    <br>
    select event here:<select name="event">
        <?php
            //$query = "INSERT INTO `$dbname`.`imagerecord` (`id`,`image_name`,`description`) VALUES (1, '".$_FILES['file']['name']."', '$desc')";
            $eventquery = "SELECT * FROM `$dbname`.`events`";
            $eventresult = mysql_query($eventquery);
            while($eventrows = mysql_fetch_array($eventresult)){
                echo "<option>". $eventrows['events']."</option>";
            }
        ?>
    </select>
    </br>
    <textarea placeholder="write Video description here" name="description"></textarea>
    </br>
    <input type="submit" name="submit" value="submit" >
</form>
<?php
    if($errors != ""){
        echo "<div class='ga-errors'>".$errors."</div>";
    }

    if($message != ""){
        echo "<div class='ga-success'> File upload Successful </br>".$message."</div>";
    }
?>
</body>
</html>
