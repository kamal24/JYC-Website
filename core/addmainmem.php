<?php
include_once('dbconnect.php');

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
    imagejpeg($thumb,$savePath,100);
    /*
    Out put of image
    if the $savePath is null then it will display the image in the browser
    */
    imagedestroy($thumb);
    /*
        Destroy the image
    */

}


if(isset($_POST['submit']) )
{
$_POST = array_map('mysql_real_escape_string',$_POST);

$clubname=$_POST['clubname'];
$name=$_POST['co-name1'];
$email_id=($_POST['contact-info1']);
$mob_no=($_POST['mob_no']);
$fblink=($_POST['fblink']);
$linkdenlink=($_POST['linkdenlink']);
$gpluslink=($_POST['gpluslink']);
$post=($_POST['post']);
$aboutme= ($_POST['aboutme']);
$fileName= ($_FILES["file"]["name"]);

$path = "officebearerimages/";
if (file_exists($path . $_FILES["file"]["name"])) {
    $errors = $_FILES["file"]["name"] . " already exists. ";
}else{
move_uploaded_file($_FILES["file"]["tmp_name"],
$path . $_FILES["file"]["name"]);


$imgfile=$path.$_FILES["file"]["name"]; // The Source of your image file
imageCompression($imgfile,360,$imgfile);

$query="insert into `$dbname`.`mainmember`(`id`,`name`,`mob_no`,
`email_id`,`aboutme`,`fblink`,`linkdenlink`,`gpluslink`
,`post`,`clubname`,`imageid`)  values (null,'$name','$mob_no','$email_id','$aboutme','$fblink','$linkdenlink','$gpluslink',
'$post','$clubname','$fileName')";
$result=mysql_query($query);
echo $result;
}
}
?>


 

<html>
<body>
<form action="addmainmem.php" method="post" enctype="multipart/form-data">
<p>
select club:<input type="text"  name="clubname"></input>
<!--
<select name="clubname" type="text">
<?php
 $eventsquery = "SELECT * FROM `$dbname`.`club`";
    $eventsresult=mysql_query($eventsquery);
    
$eventsquery1 = "SELECT * FROM `$dbname`.`comm`"; 
     $eventsresult1=mysql_query($eventsquery1);
     
    echo '<option></option>';                           
while($eventsrow = mysql_fetch_array($eventsresult)){
    echo '<option>'.$eventsrow['clubname'].'</option>';
}  

while($eventsrow = mysql_fetch_array($eventsresult1)){
    echo '<option>'.$eventsrow['clubname'].'</option>';
}    
 ?>                                 
 </select>
 -->
</p>
<p>member-name<input type="text" name="co-name1"></input></p>
<p>email-id<input type="text" name="contact-info1"></input></p>
<p>mobile-no<input type="text" name="mob_no"></input></p>
<p>fblink<input type="text" name="fblink"></input></p>
<p>linkdenlink<input type="text" name="linkdenlink"></input></p>
<p>gpluslink<input type="text" name="gpluslink"></input></p>
<p>select post:<select name="post" type="text">
<?php
 $post=array('coordinator','vicecordinator','president','seceratery','treasurer');
 for($i=0;$i<=4;$i++){
    echo '<option>'.$post[$i].'</option>';
}       
 ?>                                 
 </select>
 </p>
 <p>aboutme:<textarea name="aboutme"></textarea></p>
<p>img:<input type="file" name="file" id="file"></input></p>
<p><input type="submit" name="submit" value="Add"></p>
</form>
</body>

</html>