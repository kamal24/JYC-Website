<!DOCTYPE html>

	<head>
		
		<link rel="stylesheet" type="text/css" href="CaptionHover/css/default.css" />
		<link rel="stylesheet" type="text/css" href="CaptionHover/css/component.css" />
		<script src="CaptionHover/js/modernizr.custom.js"></script>
		 <style type="text/css">
	     .grid figcaption span:before {
	      /*content: 'by ';*/
        }
       </style>
       
       
	
	</head>

		<div class="container" style="">
			<!-- Top Navigation -->
		<div class="spinner"></div>
			<ul class="grid cs-style-5" id="clubs">
			    <?php
			    include_once('../core/dbconnect.php');
             $eventsquery = "SELECT * FROM `$dbname`.`comm`";
             $result=mysql_query($eventsquery);
			    while($row=mysql_fetch_array($result))
			 {
			$clubname=$row['clubname'];
			$id=$row['id'];
			 
			 $img='CaptionHover/images/'.$clubname.'/'.$row['bgimage'];
				echo '<li>
					  <figure>
						<img src="'.$img.'" alt="img04">
						<figcaption>
							<h3>'.$clubname.'</h3>
							
							<a href="#btn" class="btn1" clubname="'.$clubname.'" id="'.$id.'">See More</a>
						</figcaption>
					  </figure>
				     </li>';
				}
				?>
			
				
				<!--<li>
					<figure>
						<img src="CaptionHover/images/5.png" alt="img05">
						<figcaption>
							<h3>Safari</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
						</figcaption>
					</figure>
				</li>
				
				<li>
					<figure>
						<img src="CaptionHover/images/1.png" alt="img01">
						<figcaption>
							<h3>Camera</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="CaptionHover/images/2.png" alt="img02">
						<figcaption>
							<h3>Music</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1115960-Music">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="CaptionHover/images/7.png" alt="img06">
						<figcaption>
							<h3>Game Center</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1118904-Game-Center">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="CaptionHover/images/3.png" alt="img03">
						<figcaption>
							<h3>Phone</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1117308-Phone">Take a look</a>
						</figcaption>
					</figure>
				</li>-->
			</ul>
		<!-- /container -->
		
		
		<div id="content">
<div class="container">
       
<div class="row">
	<section id="btn">
<!--  Buttons Begin -->

		<!--<div class="page-header">
		    <h1>Animated Buttons</h1>
		</div>-->
		<div class="row-fluid clubdata">
			
		</div>
<!--  Buttons End -->
</section>
<section id="styles">
<!--  Images Styles Begin -->
		
	
</section>
</div>
</div>
</div>
</div>
		<script src="CaptionHover/js/toucheffects.js"></script>
		
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
   
   $(".btn1").click(function(){
  	
  	  var id=$(this).attr('id'); 
  	 var clubname=$(this).attr('clubname'); 
  	        var web="clubs.php?id1="+clubname;
   
    $.ajax({url:web,success:function(result){
    	
       scrollToElement('#btn', 600);
   change(clubname);
     $(".clubdata").html(result);
     jQuery('.spinner').animate({'opacity':0},2000,'easeOutCubic',function (){jQuery(this).css('display','none')});
     
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
	