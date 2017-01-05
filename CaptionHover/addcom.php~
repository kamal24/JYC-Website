   <?php
        /**
         * Created by JetBrains PhpStorm.
         * User: Gaurav
         * Date: 2/23/14
         * Time: 10:36 AM
         * To change this template use File | Settings | File Templates.
         */
    function createFile($desc, $clubname,$path){
        $str = $desc;

        $file=fopen($path.$clubname.'.php',"w+") or exit("Unable to open file");
        fwrite($file, $str);
    }

        include_once('../core/dbconnect.php');
        // Function for resizing any jpg, gif, or png image files
 /*       function ak_img_resize($target, $newcopy, $w, $h, $ext) {
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
*/

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

        $errors = "";
        $message = "";
        if(isset($_POST['submit'])){
            $fileName = Array();
            $clubname = "";
            $desc = "";
            $numberofimage = 1;
            $clubname = "";
            $isAllSet = false;
            if(isset($_FILES) && isset($_POST['description']) && isset($_POST['clubname'])){
                if(!empty($_POST['description'])){
                  //  $_POST = array_map('mysql_real_escape_string',$_POST);

                    while($numberofimage <= 6 && isset($_FILES['file'.$numberofimage])){
                        $var = 'file'.$numberofimage;
                        $fileName[$numberofimage - 1] = $_FILES[$var]["name"];
                        $numberofimage++;
                    }

                    $clubname=$_POST['clubname'];
                    $desc=$_POST['description'];
                    $isAllSet = true;
                }else{
                    $errors = "enter all required fields";
                }
            }else{
                $errors = "enter All required fields";
            }


            $path = "images/$clubname/";
            mkdir($path);
            if($isAllSet == true){
                for( $i = 1; $i < $numberofimage ; $i++){
                $allowedExts = array("gif", "jpeg", "jpg", "png","JPG");
                $var = 'file'.$i;
                $temp = explode(".", $_FILES[$var]["name"]);
                $extension = end($temp);

                if ((($_FILES[$var]["type"] == "image/gif")
                        || ($_FILES[$var]["type"] == "image/jpeg")
                        || ($_FILES[$var]["type"] == "image/jpg")
                        || ($_FILES[$var]["type"] == "image/pjpeg")
                        || ($_FILES[$var]["type"] == "image/x-png")
                        || ($_FILES[$var]["type"] == "image/png"))
                    && ($_FILES[$var]["size"] < 20000000)
                    && in_array($extension, $allowedExts)){

                    if ($_FILES[$var]["error"] > 0){
                        $errors = "Return Code: " . $_FILES[$var]["error"] . "<br>";
                    }else{
                        if (file_exists($path . $_FILES[$var]["name"])){
                            $errors = $_FILES[$var]["name"] . " already exists. ";
                        }else{
                            $message =  "Upload: " . $_FILES[$var]["name"] . "<br>";
                            $message .= "Type: " . $_FILES[$var]["type"] . "<br>";
                            $message .= "Size: " . ($_FILES[$var]["size"] / 1024) . " kB<br>";
                            $message .= "Temp file: " . $_FILES[$var]["tmp_name"] . "<br>";
                            move_uploaded_file($_FILES[$var]["tmp_name"],
                                               $path . $_FILES[$var]["name"]);

                            //$connect = new databaseConnect();//database name
                            //$connect->execQuery();//Query for image url insertion

                                $target_file = $path.$fileName[$i - 1];
                                $resized_file = $path."resized_".$fileName[$i - 1];
                                if($i < 6 ){
                                    $wmax = 1024;
                                    imageCompression($path.$_FILES[$var]["name"], $wmax, $path.$_FILES[$var]["name"]);
                                }else{
                                    $wmax = 360;
                                    imageCompression($path.$_FILES[$var]["name"],$wmax,$path.'resized_'.$_FILES[$var]["name"]);
                                }
                                //ak_img_resize($target_file, $resized_file, $wmax, $hmax, $extension);



                            createFile($desc, $clubname,$path);
                            }
                        }
                    }
                }

                $query = "INSERT INTO `$dbname`.`comm` (`id`,`clubname`,`image_name1`,`image_name2`,`image_name3`,`image_name4`,`image_name5`,
                    `bgimage`,`logo`,`description`)  VALUES (null,'$clubname','$fileName[0]',
                    '$fileName[1]','$fileName[2]','$fileName[3]','$fileName[4]','$fileName[5]','','')";

                if(mysql_query($query)){
                    $message .= "Stored in: " . $path;
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
    <div> Caution! Image size must be less than 2 megabytes</div>
    <form action="addcom.php" method="post" enctype="multipart/form-data">
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
        
        <textarea placeholder="write club description here" name="description"></textarea>
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
    </body>
    </html>
