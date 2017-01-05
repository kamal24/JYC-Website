<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 1/26/14
 * Time: 10:53 PM
 * To change this template use File | Settings | File Templates.
 */
    include_once('dbconnect.php');
    // Function for resizing any jpg, gif, or png image files
    function ak_img_resize($target, $newcopy, $w, $h, $ext) {
        list($w_orig, $h_orig) = getimagesize($target);
        $scale_ratio = $w_orig / $h_orig;
        if (($w / $h) > $scale_ratio) {
            $w = $h * $scale_ratio;
        } else {
            $h = $w / $scale_ratio;
        }
        $img = "";
        $ext = strtolower($ext);
        if ($ext == "gif"){
            $img = imagecreatefromgif($target);
        } else if($ext =="png"){
            $img = imagecreatefrompng($target);
        } else {
            $img = imagecreatefromjpeg($target);
        }
        $tci = imagecreatetruecolor($w, $h);
        // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
        imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
        if ($ext == "gif"){
            imagegif($tci, $newcopy);
        } else if($ext =="png"){
            imagepng($tci, $newcopy);
        } else {
            imagejpeg($tci, $newcopy, 84);
        }
    }


$errors = "";
$message = "";
if(isset($_POST['submit'])){
    $fileName = "";
    $fileSize = "";
    $fileErrorMsg = "";
    $fileType = "";
    $desc = "";

    $isAllSet = false;

    echo ini_get('upload_max_filesize').'<br/>';
    ini_set("upload_max_filesize","6M");
    echo ini_get("upload_max_filesize");
    if(isset($_FILES['file']) && isset($_POST['description'])){
        if(!empty($_POST['description'])){
            $fileName = $_FILES["file"]["name"]; // The file name
            $fileType = $_FILES["file"]["type"]; // The type of file it is
            $fileSize = $_FILES["file"]["size"]; // File size in bytes
            $fileErrorMsg = $_FILES["file"]["error"];
            $desc = $_POST['description'];
            $isAllSet = true;
            echo $fileName.' / '.$fileType.' / '.$fileSize.' / '.$fileErrorMsg;
        }else{
            $errors = "enter all required fields";
        }
    }else{
        $errors = "enter All required fields";
    }

    $event = $_POST['events'];
    $path = "upload/$event/";
    if($isAllSet == true){
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");

        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/jpg")
                || ($_FILES["file"]["type"] == "image/pjpeg")
                || ($_FILES["file"]["type"] == "image/x-png")
                || ($_FILES["file"]["type"] == "image/png") )
            && ($_FILES["file"]["size"] < 6000000)
            && in_array($extension, $allowedExts)){

            if ($_FILES["file"]["error"] > 0){
                $errors = "Return Code: " . $_FILES["file"]["error"] . "<br>";
            }else{
                if (file_exists($path . $_FILES["file"]["name"]))
                {
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

                    //$connect = new databaseConnect();//database name
                    //$connect->execQuery();//Query for image url insertion

                    $target_file = $path.$fileName;
                    $resized_file = $path."resized_".$fileName;
                    $wmax = 200;
                    $hmax = 200;
                    ak_img_resize($target_file, $resized_file, $wmax, $hmax, $extension);

                    $query = "INSERT INTO `$dbname`.`imagerecord` (`id`,`dateofupload`,`image_name`,`description`,`event`) VALUES (null, CURDATE(),'$fileName', '$desc','$event')";
                    if(mysql_query($query)){
                        $message .= "Stored in: " . $path . $_FILES["file"]["name"];
                    }else{
                        $errors .= "file uploading failed";
                    }
                }
            }
        }else{
            $errors = "Invalid file";
        }
    }
}
?>
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
<div> Caution! file size must be less than 2 megabytes</div>
<form action="imageUploader.php" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file"><br>
    select event here:<select name="events">
        <?php
            //$query = "INSERT INTO `$dbname`.`imagerecord` (`id`,`image_name`,`description`) VALUES (1, '".$_FILES['file']['name']."', '$desc')";
            $eventquery = "SELECT * FROM `$dbname`.`events`";
            $eventresult = mysql_query($eventquery);
            while($eventrows = mysql_fetch_array($eventresult)){
                echo "<option>". $eventrows['event']."</option>";
            }
        ?>
    </select>
    <textarea placeholder="write image description here" name="description"></textarea>
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
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'devnetwork'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

</body>
</html>
