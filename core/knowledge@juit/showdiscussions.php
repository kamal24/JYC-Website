<script>
    $(".link-1").click(function(e){
        e.preventDefault();
        var id=$(this).attr('href');
        alert(id);
        $(this).addClass('active');
        var web="core/knowledge@juit/"+id;
        $.ajax({url:web,success:function(result){
            $("#content").html(result);
        }
        });
    });
</script>
<div id="content"><div class="ic"></div>
    <?php
 include_once('dbconnect.php');
   $groupname = $_GET['id'];
   // echo $groupname;
   //$groupname = "computer science";

    $numberofrows = 0;
    if($dbc){
        $page = intval($_GET['page']);

            $queryDiscussion = "SELECT * FROM `$dbname`.`$groupname` ORDER BY discussion_date desc";
            $discussion = mysql_query($queryDiscussion);
            $numberofrows = intval(mysql_num_rows($discussion));
           
            echo "<article class='span4' style='margin-left:10%; float:right;'><a href='core/knowledge@juit/startDiscussion.php?group=".$groupname."'
                    style='color:whitesmoke;' target='_blank'><button class='btn-1' >Start Discussion </button><span> + </span></a></article>";
            echo '<div class="container" >';



        $to = $page * 10;
        $from = $to - 10;
        $discussions  = mysql_query("SELECT * FROM `$dbname`.`$groupname` ORDER BY discussion_date desc LIMIT $from,$to") ;
        echo "<article class='span12'><ul style='list-style: none;'>";
       
        while($discussionRows = (mysql_fetch_array($discussions))){
            if($discussionRows['isactive'] == 1){
                $path = 'core/knowledge@juit/group/'.$groupname.'/'.$discussionRows['discussion_title'].'/default.php';
                echo' <li class="row well" style="box-shadow: 2px 3px 4px gray;background-color: #585454;margin:1%;border: 0px;">
                <a href="'.$path.'" class="table table-hover" target="_blank">
                   <span class="label label-info span4" style="display:inline;margin-right:2%;">'. $discussionRows["discussionID"].'</span>
                   <span class="span4" style="font-size:1.3em">'. $discussionRows["discussion_title"].' </span>
                   <span class="label badge-warning " style="float:right; margin-left:2%;style="font-size:1.3em"" > Related To : '.$discussionRows['relatedto'].'</span>
                   <span class="label badge-success " style="float:right; margin-">'.$discussionRows['discussion_date'].'</span>
                </a>
           </li>';
           
            }
        
        }
    
        echo "</ul></article>";

            $count = 1;
            if($numberofrows > 10){
                if($numberofrows % 10 == 0)
                    $count = intval($numberofrows / 10);
                else
                    $count = intval(($numberofrows / 10) + 1);
            }

            echo '<ul class="pager"><div class="pagination pagination-centered"><ul><li><a href="#" >Prev</a></li>';
            for($i = 1 ; $i <= $count ; $i++){
                echo '<li><a class="link-1" href="showdiscussions.php?id='.$groupname.'&page='.$i.'"> '.$i.' </a></li>';
            }

            echo '<li><a href="#">Next</a></li></ul></div></ul>';

    }
?>
</div>
</div>