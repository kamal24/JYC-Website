   <!-- <link href="css/demo-styles.css" rel="stylesheet">-->
   
  

   

    <link href="assets/css/tm_docs.css" rel="stylesheet">
    
   
  <script type="text/javascript">
    /*
        setTimeout(linkclick
            
        , 100);*/
        
    /*    
   $(window).scroll(function(){
       $(".bs-docs-sidebar").animate({"marginTop": ($(window).scrollTop() + 50) + "px"}, "slow" );
   });*/
        
       
        
   var change=function (clubname) {
   	$('#kamal').html("description of "+clubname);
	$('#gaurav').html("cordinator name");
}
 
   var scrollToElement = function(el, ms){
    var speed = (ms) ? ms : 600;
    $('html,body').animate({
        scrollTop: $(el).offset().top
    }, speed);
}
   $(".ajax-loader").show();
   $(".btn1").click(function(){
  	
  	  var id=$(this).attr('id'); 
  	 var clubname=$(this).attr('clubname'); 
  	        var web="clubs.php?id="+clubname;
   
    $.ajax({url:web,success:function(result){
    	
       scrollToElement('#btn', 600);
   change(clubname);
     $(".clubdata").html(result);
     jQuery('.spinner').animate({'opacity':0.5},3000,'easeOutCubic',function (){jQuery(this).css('display','none')});
     
    },

complete:function(){
	 /* 
 jQuery('#camera_wrap_1').camera({
        thumbnails: true
      });
      
 */
 
       jQuery('#camera_wrap_2').camera({
        height: '400px',
        loader: 'bar',
        pagination: false,
        thumbnails: false
      });

}
    
    

});
});
 
</script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <link href="css/ie.css" rel="stylesheet">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    
  <div class="container">
   
  

    <!--<div class="dashboard clearfix1">-->
    <div class="row" id="clubs">
      
      
      
<!-- section -->
	<section id="hovers">
				
<!--  Hovers Begin -->
      <?php 
      /*$query="select * from `club`";
      @$result=mysql_query($query);
       @$num=mysql_num_rows($result);
       $count1=0;
       $count2=0;
      while( @$row=mysql_fetch_array($result)) {
      $clubname[$count++]=$row['clubname'];
      $clubname[$count++]=$row['clubname'];
      }*/
      include_once('dbconnect.php');
      $eventsquery = "SELECT * FROM `$dbname`.`club`";
      $result=mysql_query($eventsquery);
      
     $r=array('first','third','fourth','fifth','sixth','seventh','eighth');
			echo '<div class="row-fluid tm_views" style="display:block;">';
			$count=0;
			while($row=mysql_fetch_array($result))
			 {
			$clubname=$row['clubname'];
			$id=$row['id'];
			 $s='tm_view_'.''.$r[$count];
			 $img='assets/clubimages/'.$clubname.'/'.''.$row['bgimage'];
			 
         echo '<div class="span4">
				<div  class="tm_view '.$s.'" style="display:block;margin-top:15%">
					 <img src="'.$img.'" alt="" />
					 
					 <div class="tm_mask btn1" id="'.$id.'" clubname="'.$clubname.'">
					 <div class="tm_content">
						<h2>'.$clubname.'</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="#btn" class="btn btn1" style="border-radius:25%"id="'.$id.'" clubname="'.$clubname.'">Know More</a>
						</div>
					 </div>
				</div>
			</div>';
		  
	     $count=$count+1;
	         if($count %3==0){
	         	echo '</div>';
	         	echo '<div class="row-fluid tm_views" style="display:block;">';
	         }
							if($count==7)
							{
								$count=0;
							}
							}
		 ?>
			<!--<div class="span4">
				<div class="tm_view tm_view_second">
					 <img src="assets/img/stock_images/700x430_2.jpg" alt="" />
					<div class="tm_mask"></div>
					<div class="tm_content btn1">
						<h2>Second Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="#btn" class="btn btn1">Button</a>
					</div>
				</div>
			</div>
	
		
			<div class="span4">
				<div class="tm_view tm_view_third">
					 <img src="assets/img/stock_images/700x430_3.jpg" alt="" />
					<div class="tm_mask"></div>
					<div class="tm_content btn1">
						<h2>Third Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="#btn" class="btn btn1">Button</a>
					</div>
				</div>
			</div>
			
			<div class="span4">
				<div class="tm_view tm_view_fourth">
					 <img src="assets/img/stock_images/700x430_4.jpg" alt="" />
					 <div class="tm_mask btn1">
						<h2>Fourth Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn btn1 ">Button</a>
					 </div>
				</div>
			</div>
		
		
			<div class="span4">
				<div class="tm_view tm_view_fifth">
					 <img src="assets/img/stock_images/700x430_5.jpg" alt="" />
					<div class="tm_mask">
						<div class="tm_content btn1">
						<h2>Fifth Hover</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
							<a href="" class="btn btn1">Button</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="span4">
				<div class="tm_view tm_view_sixth">
					 <img src="assets/img/stock_images/700x430_6.jpg" alt="" />
					<div class="tm_mask"></div>
					<div class="tm_content  btn1">
						<h2>Sixth Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn btn1">Button</a>
					</div>
				</div>
			</div>
		
		
			<div class="span4">
				<div class="tm_view tm_view_seventh">
					 <img src="assets/img/stock_images/700x430_7.jpg" alt="" />
					 <div class="tm_mask  btn1">
						<h2>Seventh Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn btn1">Button</a>
					 </div>
				</div>
			</div>
			
			<div class="span4">
				<div class="tm_view tm_view_eighth">
					 <img src="assets/img/stock_images/700x430_8.jpg" alt="" />
					<div class="tm_mask">
						<div class="tm_content btn1">
						<h2>Eighth Hover</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
							<a href="" class="btn btn1">Button</a>
						</div>
					</div>
				</div>
			</div>-->
			</div>
		
	<!--	</div>-->
	<!--
	<div class="span3 bs-docs-sidebar" style="right:0;">
        <ul class="nav nav-list bs-docs-sidenav" style="">
	      <li style=""><a href="#hovers"><i class="icon-chevron-right"></i> <div>All Clubs</div></a></li>
	      <li ><a href="#btn"><i class="icon-chevron-right"></i><div id="kamal">Animated Buttons</div></a></li>
	      <li ><a href="#styles"><i class="icon-chevron-right"></i> <div id="gaurav">CSS3 Styles</div></a></li>
        </ul>
      </div>-->
<div id="content">
<div class="container">
       

		<div class="row-fluid clubdata" id="btn">
			
		</div>


		
	

</div>
</div>
</div>


  



   
   <!-- <script src="assets/js/jquery.cookie.js"></script>-->
  
    <script>
    	$(function(){
    		$(".notClicked").click(function(event) {event.preventDefault();});
        	$('.tm_pad-image>span').tooltip();
    	});
    </script>
