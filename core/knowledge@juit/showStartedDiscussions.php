<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gaurav
 * Date: 1/29/14
 * Time: 5:17 PM
 * To change this template use File | Settings | File Templates.
 */

    if(isset($_COOKIE['admin'])){
    $errors = "";
    $message = "";
    
    include_once('dbconnect.php');
        if($dbc){
            $getGroupsQuery = "SELECT * FROM `$dbname`.`groups`";
            $foundGroups = mysql_query($getGroupsQuery);

            if($foundGroups){
                while($groupRows = mysql_fetch_array($foundGroups)){
                    $groupTable = $groupRows['groupname'];
                    $queryDiscussion = "SELECT * FROM `$dbname`.`$groupTable`";
                    $discussionQueryResult = mysql_query($queryDiscussion);
                    while($groupDiscussionRow = mysql_fetch_array($discussionQueryResult)){
                        if($groupDiscussionRow['isactive'] == 0){
                            echo "
                            <div>
                                <form action='verifyDiscussion.php?group=".$groupTable."&&discussionID=".$groupDiscussionRow['discussionID']."' method='post' enctype='multipart/form-data'>
                                    <div>Related to : ".$groupTable."</div>
                                    <div>
                                        Discussion Content :<br/>".$groupDiscussionRow['discussion_content']."
                                    </div>
                                    <input type='submit' name='verify' value='verify'/>
                                </form>
                            </div>";
                        }
                    }
                }
            }
        }
    }else{
        header('location: ../checkAdmin.php');
    }

?>
    