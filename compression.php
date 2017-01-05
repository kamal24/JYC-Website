<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 2/23/14
 * Time: 2:16 PM
 * To change this template use File | Settings | File Templates.
 */
    include_once('core/UnivKhabhar/dbconnect.php');
$message = "";
function imageCompression($imgfile="",$thumbsize=0,$savePath=NULL) {
    if($savePath==NULL) {
        header('Content-type: image/jpeg');
        /* To display the image in browser

        */

    }
    list($width,$height)=getimagesize($imgfile);
    /* The width and the height of the image also the getimagesize retrieve other information as well   */

    $imgratio=$width/$height;
    /*
    To compress the image we will calculate the ration
    For eg. if the image width=700 and the height = 921 then the ration is 0.77...
    if means the image must be compression from its height and the width is based on its height
    so the newheight = thumbsize and the newwidth is thumbsize*0.77...
    */

    if($imgratio>1) {
        $newwidth=$thumbsize;
        $newheight=$thumbsize/$imgratio;
    } else {
        $newheight=$thumbsize;
        $newwidth=$thumbsize*$imgratio;
    }

    $thumb=imagecreatetruecolor($newwidth,$newheight); // Making a new true color image
    $source=imagecreatefromjpeg($imgfile); // Now it will create a new image from the source
    imagecopyresampled($thumb,$source,0,0,0,0,$newwidth,$newheight,$width,$height);  // Copy and resize the image
    imagejpeg($thumb,$savePath);
    /*
    Out put of image
    if the $savePath is null then it will display the image in the browser
    */
    imagedestroy($thumb);
    /*
        Destroy the image
    */

}

    if(isset($_POST['submit'])){
    	//$_POST = array_map('mysql_real_escape_string',$_POST);
        $file =$_FILES['file']['name'];
        $path = 'upload/'.$_POST['event'].'/';
         if ($_FILES["file"]["error"] > 0){
            $errors = "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }else{
            if (file_exists($path. $_FILES["file"]["name"])){
                $errors = $_FILES["file"]["name"] . " already exists. ";
            }
           else
                    {

                        $message =  "Upload: " . $_FILES["file"]["name"] . "<br>";
                        $message .= "Type: " . $_FILES["file"]["type"] . "<br>";
                        $message .= "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                        $message .= "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
                        move_uploaded_file($_FILES["file"]["tmp_name"],
                                           $path . $_FILES["file"]["name"]);

                        imageCompression($path.$file, 1024, $path.$file);
                        imageCompression($path.$file,250,$path.'resized_'.$file);
                        $desc = "";
                        $event = $_POST['event'];
                        $query = "INSERT INTO `$dbname`.`imagerecord` (`id`,`dateofupload`,`image_name`,`description`,`event`) VALUES (null, CURDATE(),'$file', '$desc','$event')";
                        if(mysql_query($query)){
                                $message .= "image added to database successfully";
                        }

                    }
         }
    }
?>

<!DOCTYPE html>
    <head></head>
    <body>
        <form method="post" action="compression.php" enctype="multipart/form-data">
            <input type="file" name="file"/>
            <br>
            select event here:<select name="event">
                <?php
                    //$query = "INSERT INTO `$dbname`.`imagerecord` (`id`,`image_name`,`description`) VALUES (1, '".$_FILES['file']['name']."', '$desc')";
                    $eventquery = "SELECT * FROM `$dbname`.`events`";
                    $eventresult = mysql_query($eventquery);
                    while($eventrows = mysql_fetch_array($eventresult)){
                        echo "<option>". $eventrows['event']."</option>";
                    }
                ?>
            </select>

            <input type="submit" name="submit" />
        </form>
    <?php echo $message; ?>
    </body>
