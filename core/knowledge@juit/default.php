 <script>
$(".link-1").click(function(){
  	  var id=$(this).attr('id'); 
  	  alert(id);
  	        var web="core/knowledge@juit/showdiscussions.php?id="+id+"&page=1";
     $.ajax({url:web,success:function(result){
     $("#content").html(result);
    }
});
});
	</script>
	<div id="content"><div class="ic"></div>
	<div class="spinner"></div>
    <div class="container">
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
    $queryGroupTable = "SELECT * FROM `$dbname`.`groups`";
    $result = mysql_query($queryGroupTable);
    $numOfRows = mysql_num_rows($result);
    echo "<article>
                  <h4 style='margin-left:5%;'>Groups</h4>
             </article>" ;
    echo "<ul class='thumbnails thumbnails-1 list-services' style='margin:2%;'>";
    while($fetchData = mysql_fetch_array($result)){
         $groupname = $fetchData['groupname'];
         echo"
         <li class='span4'>
                     <div class='thumbnail thumbnail-1'> <img src='img/service-2.jpg' alt=''>
                     <section> <h3 style='font-size:1.3em;'><a id='$groupname' href='#' class='link-1'>".$groupname."</a></h3>
                         <p>".$fetchData['groupdesc'].".</p>
                       </section>
                         </div>
         </li>
           ";
    }
    echo "</ul>";
}else{

}
?>
</div>
</div>
