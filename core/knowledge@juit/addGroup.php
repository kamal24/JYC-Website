<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 1/29/14
 * Time: 5:15 PM
 * To change this template use File | Settings | File Templates.
 */
    include_once('dbconnect.php');
    $errors = "";
    $message = "";

    function putImageToFolder($imagepath){
        $allowedExts = array("gif", "jpeg", "jpg", "png");

        $temp = explode(".", $_FILES["group_image"]["name"]);
        $extension = end($temp);

        if ((($_FILES["group_image"]["type"] == "image/gif")
        || ($_FILES["group_image"]["type"] == "image/jpeg")
        || ($_FILES["group_image"]["type"] == "image/jpg")
        || ($_FILES["group_image"]["type"] == "image/pjpeg")
        || ($_FILES["group_image"]["type"] == "image/x-png")
        || ($_FILES["group_image"]["type"] == "image/png"))
    && ($_FILES["group_image"]["size"] < 2000000)
    && in_array($extension, $allowedExts)){

            if ($_FILES["group_image"]["error"] > 0){
                $errors = "Return Code: " . $_FILES["group_image"]["error"] . "<br>";
            }else{
                if (file_exists($imagepath. $_FILES["group_image"]["name"])){
                    $errors = $_FILES["group_image"]["name"] . " already exists. ";
                }
                else{

                    move_uploaded_file($_FILES["group_image"]["tmp_name"],
                                       $imagepath . $_FILES["group_image"]["name"]);
                }
            }
        }
    }


    if(isset($_POST['group_submit'])){
        if(isset($_POST['group_name'])){

            $query = "SELECT * FROM `$dbname`.`groups`";
            $result = mysql_query($query);
            $newGroupName = $_POST['group_name'];

            //check if group already exists
            if($result){
                $isGroupAlreadyExists = false;
                while($row = mysql_fetch_array($result)){
                    if($row['groupname'] == $_POST['group_name']){
                        $isGroupAlreadyExists = true;
                        break;
                    }
                }
            }

            //proceede if group doesn't exist
            if($isGroupAlreadyExists == false){
                $path = 'group/'.$newGroupName;
                $isGroupDescriptionSet = isset($_POST['group_description']) ? true : false;
                $isGroupImageSet = isset($_FILES['group_image']) ? true : false;

                if($isGroupDescriptionSet == true && $isGroupImageSet == true){
                    $groupImage = $_FILES['group_image']['name'];
                    $groupDescription = $_POST['group_description'] ;
                    mkdir($path);
                    mkdir($path.'/image/');

                    $groupMakeQuery = "CREATE TABLE `$dbname`.`$newGroupName` (discussionID int(100) not null primary key auto_increment, discussion_title varchar(100) not null, discussion_content text(2000), relatedto varchar(250) not null, discussion_date  varchar(15) not null,isactive tinyint(1) default 0)";
                    $groupAddQuery = "INSERT INTO `$dbname`.`groups` (`groupname`,`groupimage`,`groupdesc` ) VALUES ('$newGroupName', '$groupImage', '$groupDescription' )";
                    $ifGroupMade = mysql_query($groupMakeQuery);
                    $ifGroupAdded = mysql_query($groupAddQuery);
                    putImageToFolder($path.'/image/');
                    if($ifGroupAdded && $ifGroupMade){
                        $message = "Group added Successfully";
                    }
                }else{
                    $errors = "fill all the required fields";
                }
            }else{
                $errors = "Group already exists";
            }
        }
    }
?>
<DOCTYPE html>
    <html>
        <head>
            <title> Add Group</title>
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
            <form action="addGroup.php" enctype="multipart/form-data" method="post">
                <input type="text" name="group_name" placeholder="enter group name here" />
                <input type="file" name="group_image" />
                <textarea placeholder="enter group description here" name="group_description"></textarea>
                <input type="submit" name="group_submit" />
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