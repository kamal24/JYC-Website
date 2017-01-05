<!-- by gaurav                -->
<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
<script>
   jQuery('.magnifier').touchTouch();
</script>
 <link href="assets/css/camera.css" rel="stylesheet">
<!-- gaurav code ends here -->
<div id="content"><div class="ic"></div>

    <div class="container">
    <img style="" src="" id="loadcont" height="100" width="100"/>
   <!-- <div class="spinner"></div> -->
    <article class="span6">
    <div class="span9">
        <h4>Images</h4>
         </article>
         <article class="span5" style="margin-top:1%";>
                 <form id="search" action="core/UnivKhabhar/viewImages.php" method="post" accept-charset="utf-8">
                              <div class="clearfix">
                                <select name="events" class="events">
                                  echo '<option>search image event wise</option>';
                                    <?php
                                          include_once('core/UnivKhabhar/dbconnect.php');
                                          $eventsquery = "SELECT * FROM `$dbname`.`events`";
                                                  $eventsresult = mysql_query($eventsquery);
                                                  while($eventsrow = mysql_fetch_array($eventsresult)){
                                                      echo '<option>'.$eventsrow['event'].'</option>';
                                          }
                                    ?>
                                </select>
                              <!-- <input type="submit" name="eventSearchSubmit" value="Submit"/> -->
                               </div>
                            </form>
         </article>
   
          <div class="row" style="margin-top:10%;">
        
         
        <!--<div class="clear"></div>-->
        
         <ul class="portfolio clearfix">
          <?php
                include_once('core/UnivKhabhar/viewImages.php');
          ?>
            </ul> 
    
        </div>
        </div>
  </div>
   
   <script type="text/javascript" >
   $(".events").change(function(){
  	$('#loadcont').fadeIn(500);
  	 var id=$(this).val();
  	
  	 
  	        var web="core/UnivKhabhar/viewImages.php?eventname="+id;
   
   $.ajax({url:web,success:function(result){
         
     $(".portfolio").html(result);
      $('#loadcont').fadeOut(500);
    },
complete:function () {
	jQuery('.magnifier').touchTouch();
}
    
    

});
});
 

  </script>
</script>
  
