<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 1/27/14
 * Time: 12:34 PM
 * To change this template use File | Settings | File Templates.
 */

?>
<?php
    /**
     * Created by JetBrains PhpStorm.
     * User: Gaurav
     * Date: 2/2/14
     * Time: 10:51 AM
     * To change this template use File | Settings | File Templates.
     */

    include_once('dbconnect.php');

    if($dbc){
        // $groupCategory = array("CSE","ECE","CIVIL","IT","BPHARMA","BT","MATHS","PHYSICS");
        if(isset($_GET['event'])){
            $event = $_GET['event'];
            if($event == 'select event here' || $event == 'show all videos'){
                $queryGroupTable = "SELECT * FROM `$dbname`.`videorecord`";
            }else{
                $queryGroupTable = "SELECT * FROM `$dbname`.`videorecord` WHERE event='$event'";
            }
        }else{
            $queryGroupTable = "SELECT * FROM `$dbname`.`videorecord`";
        }
        $result = mysql_query($queryGroupTable);
        $numOfRows = mysql_num_rows($result);

        echo "<ul class='thumbnails thumbnails-1 list-services' style='margin:2%;'>";
        while($fetchData = mysql_fetch_array($result)){
             $link = $fetchData['link'];
                echo"
             <li class='span5 thumbnail-2' style='display:block; height:320px; margin-bottom:50px'>
                         <div class='thumbnail thumbnail-1' style='height:90%; width:100%'>
                         <iframe width='100%' height='100%' src='$link' frameborder='0'>
                         </iframe>
                         <section>
                             <p>".$fetchData['description'].".</p>
                          </section>
                             </div>
             </li>
       ";
            }
        echo "</ul>";
    }else{
    }
