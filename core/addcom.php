<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 1/26/14
 * Time: 10:53 PM
 * To change this template use File | Settings | File Templates.
 */if(isset($_COOKIE['uname'])) {
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
    $fileName = Array();
    $fileSize = "";
    $fileErrorMsg = "";
    $fileType = "";
    $desc = "";

    $isAllSet = false;
    if(isset($_FILES['file1']) && isset($_POST['description'])){
        if(!empty($_POST['description'])){
        	 $_POST = array_map('mysql_real_escape_string',$_POST);

            for($i = 1; $i <= 6; $i++){
                $var = 'file'.$i;
                $fileName[$i - 1] = $_FILES[$var]["name"];
            }

            $fileType = $_FILES["file1"]["type"]; // The type of file it is
            $fileSize = $_FILES["file2"]["size"]; // File size in bytes
            $fileErrorMsg = $_FILES["file3"]["error"];
            $clubname=$_POST['clubname'];
            $desc=$_POST['description'];
            $isAllSet = true;
        }else{
            $errors = "enter all required fields";
        }
    }else{
        $errors = "enter All required fields";
    }

    mkdir('committiesimages/'.$clubname.'/');
    $path = "clubimages/$clubname/";
    if($isAllSet == true){
        $allowedExts = array("gif", "jpeg", "jpg", "png","JPG");

        $temp = explode(".", $_FILES["file1"]["name"]);
        $extension = end($temp);
        
        if ((($_FILES["file1"]["type"] == "image/gif")
                || ($_FILES["file1"]["type"] == "image/jpeg")
                || ($_FILES["file1"]["type"] == "image/jpg")
                || ($_FILES["file1"]["type"] == "image/pjpeg")
                || ($_FILES["file1"]["type"] == "image/x-png")
                || ($_FILES["file1"]["type"] == "image/png"))
            && ($_FILES["file1"]["size"] < 6000000)
            && in_array($extension, $allowedExts)){

            if ($_FILES["file1"]["error"] > 0){
                $errors = "Return Code: " . $_FILES["file1"]["error"] . "<br>";
            }else{
                if (file_exists($path . $_FILES["file1"]["name"]))
                {
                    $errors = $_FILES["file1"]["name"] . " already exists. ";
                }
                else
                {
                    $message =  "Upload: " . $_FILES["file1"]["name"] . "<br>";
                    $message .= "Type: " . $_FILES["file1"]["type"] . "<br>";
                    $message .= "Size: " . ($_FILES["file1"]["size"] / 1024) . " kB<br>";
                    $message .= "Temp file: " . $_FILES["file1"]["tmp_name"] . "<br>";
                    move_uploaded_file($_FILES["file1"]["tmp_name"],
                                       $path . $_FILES["file1"]["name"]);
                    move_uploaded_file($_FILES["file2"]["tmp_name"],
                                       $path . $_FILES["file2"]["name"]);
                    move_uploaded_file($_FILES["file3"]["tmp_name"],
                                       $path . $_FILES["file3"]["name"]);
                    move_uploaded_file($_FILES["file4"]["tmp_name"],
                                       $path . $_FILES["file4"]["name"]);
                    move_uploaded_file($_FILES["file5"]["tmp_name"],
                                       $path . $_FILES["file5"]["name"]);
                    move_uploaded_file($_FILES["file6"]["tmp_name"],
                                       $path . $_FILES["file6"]["name"]);
                    move_uploaded_file($_FILES["file7"]["tmp_name"],
                                       $path . $_FILES["file7"]["name"]);
                    //$connect = new databaseConnect();//database name
                    //$connect->execQuery();//Query for image url insertion

                    for($i = 0 ; $i < 6 ; $i++){
                        $target_file = $path.$fileName[$i];
                        $resized_file = $path."resized_".$fileName[$i];
                        if($i < 5 ){
                            $wmax = 650;
                            $hmax = 400;
                        }else{
                            $wmax = 310;
                            $hmax = 250;
                        }
                        ak_img_resize($target_file, $resized_file, $wmax, $hmax, $extension);
                    }

                   $query = "INSERT INTO `$dbname`.`comm` (`id`,`clubname`,`image_name1`,`image_name2`,`image_name3`,`image_name4`,`image_name5`,
                    `bgimage`,`logo`,`description`)  VALUES (null,'$clubname','$fileName[0]',
                    '$fileName[1]','$fileName[2]','$fileName[3]','$fileName[4]','$fileName[5]','$fileName[6]','$desc')";
                   // $query="insert into `forum`.`club`(`id`,`clubname`,`image_name1`) values('$clubname','$description')";
                    $result=mysql_query($query);
                    
                    echo $result;
                    $message .= "Stored in: " . $path . $_FILES["file1"]["name"];

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
        Club Adding File
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
<div> Caution! file size must be less than 2 megabytes</div>
<form action="addclub.php" method="post" enctype="multipart/form-data">
     <p>clubname:<input type="text" name="clubname"/></p>
    <label for="file">Filename1:</label>
    
    <input type="file" name="file1" id="file"><br>
    
     <label for="file">Filename2:</label>
    
    <input type="file" name="file2" id="file"><br>
    
     <label for="file">Filename3:</label>
    
    <input type="file" name="file3" id="file"><br>
    
     <label for="file">Filename4:</label>
    
    <input type="file" name="file4" id="file"><br>
    
     <label for="file">Filename5:</label>
    
    <input type="file" name="file5" id="file"><br>
    
     <label for="file">background_image:</label>
    
    <input type="file" name="file6" id="file"><br>
    
     <label for="file">logo_image:</label>
    
    <input type="file" name="file6" id="file"><br>
    
     <textarea placeholder="write committee description here" name="description"></textarea>
     
    
    <input type="submit" name="submit" value="submit" >
</form>
<?php
    if($errors != ""){
        echo "<div class='ga-errors'>".$errors."</div>";
    }

    if($message != ""){
        echo "<div class='ga-success'> club upload Successful </br>".$message."</div>";
    }
?>
<!--
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
<!--
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
-->
</body>
</html>
<?php
}
else{
echo 'you have to login first';
}
?>