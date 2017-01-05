<div id="content"><div class="ic"></div>
    <div class="container">
    <div class="spinner"></div> 
    <article class="span6">
    <div class="span10" style="">
        <div class="page-header">
				    <h2>COMMUTIES</h2>
				</div>
         </article>
         <article class="span5" style="margin-top:1%";>
                
                              <div class="clearfix">
                                <select name="events" class="events">
                                <?php
                                include_once('../core/dbconnect.php');
                                
                                
                                $eventsquery = "SELECT * FROM `$dbname`.`comm`";
                                $eventsresult=mysql_query($eventsquery);
                                  echo '<option>'.All.'</option>';
                               while($eventsrow = mysql_fetch_array($eventsresult)){
                                                      echo '<option>'.$eventsrow['clubname'].'</option>';
                                          }
                                       
                                    ?>
                                </select>
                              <!-- <input type="submit" name="eventSearchSubmit" value="Submit"/> -->
                               </div>
                            </div>
         </article>
   
         
        
       
        <!--<div class="clear"></div>-->
        
         
        <div class="container">
       
<div class="row">
	
<!--  Buttons Begin -->

		<!--<div class="page-header">
		    <h1>Animated Buttons</h1>
		</div>-->
		<div class="row-fluid changedata">
			 <?php
			 include_once('index5.php');
			?>
		</div>
<!--  Buttons End -->

<section id="styles">
<!--  Images Styles Begin -->
		
	
</section>
</div>

</div>
        
  </div>
  </div>
  <script type="text/javascript" >

   $(".events").change(function(){
  
  	 var id=$(this).val();
  	var web="";
  	 if(id!='All'){
  	         web="clubs.php?id1="+id;
   }
   else {
	web="CaptionHover/index5.php";
}
alert(web);
   $.ajax({url:web,success:function(result){
        
     $(".changedata").html(result);
    
     jQuery('.spinner').animate({'opacity':0},2000,'easeOutCubic',function (){jQuery(this).css('display','none')});
    },
complete:function(){
 /*  jQuery('#camera_wrap_1').camera({
        thumbnails: true
      });*/
      
         jQuery('#camera_wrap_2').camera({
        height: '400px',
        loader: 'bar',
        pagination: false,
        thumbnails:false
       
      });
    
       	$(".kamal1").hide();
   }

});

    
});
    



 

  </script>