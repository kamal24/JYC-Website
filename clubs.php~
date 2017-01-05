<?php
if(isset($_GET['id']) || isset($_GET['id1']))
{
	?>
	
    <!--<link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/css/prettify.css" rel="stylesheet">
    <link href="assets/css/tm_docs.css" rel="stylesheet">-->
  
   
<script type="text/javascript" >
$(".kamal1").click(function(){
  	$("#gaurav1").html("");
		
});
</script>

 
  
  
<div id="gaurav1" style="">
 
<div class="container">
<div class="spinner"></div> 
  <!--<div class="span3 bs-docs-sidebar" >-->
  
      <div class="span4">
   <ul class="nav nav-list bs-docs-sidenav" style="position:absolute;right:0px;">
      <li><a href="#clubs" class="kamal1"><i class="icon-chevron-right"></i> Back To All Clubs</a></li>
      <li><a href="#descr"><i class="icon-chevron-right"></i>Go to Description</a></li>
        </ul>
      </div>

<!-- Docs nav -->
    <div class="row">
     
      


<!-- Slider -->

<section id="b-slider">
<!--
 <div class="page-header" style="text-align:center">
    <h2 style="word-wrap:break-word">CULTURAL CLUB</h2>
  </div>
   <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
      <div data-thumb="assets/img/camera/slides/thumbs/bridge.jpg" data-src="assets/img/camera/slides/bridge.jpg">
          <div class="camera_caption fadeFromBottom">
              Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/leaf.jpg" data-src="assets/img/camera/slides/leaf.jpg">
          <div class="camera_caption fadeFromBottom">
              It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/road.jpg" data-src="assets/img/camera/slides/road.jpg">
          <div class="camera_caption fadeFromBottom">
              <em>It's completely free</em> (even if a donation is appreciated)
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/sea.jpg" data-src="assets/img/camera/slides/sea.jpg">
          <div class="camera_caption fadeFromBottom">
              Camera slideshow provides many options <em>to customize your project</em> as more as possible
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/shelter.jpg" data-src="assets/img/camera/slides/shelter.jpg">
          <div class="camera_caption fadeFromBottom">
              It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/tree.jpg" data-src="assets/img/camera/slides/tree.jpg">
          <div class="camera_caption fadeFromBottom">
              Different color skins and layouts available, <em>fullscreen ready too</em>
          </div>
      </div>
  </div><!-- #camera_wrap_1 
  <div style="clear:both;"></div>
 --> 
</section>



   <div class="page-header span12" >
     <?php
      include_once('core/dbconnect.php');
     if(isset($_GET['id'])){
     $id=$_GET['id'];
     $club='club';
     $s='assets/clubimages/';
     }
     else {
     	 $id=$_GET['id1'];
     $club='comm';
      $s='CaptionHover/images/';
     	}
     $query="select * from `$dbname`.`$club` where `clubname`='$id'";
     $result=mysql_query($query);
    
     $row=mysql_fetch_array($result);
     $clubname=$row['clubname'];
     $img1=$s.''.$clubname.'/'.''.$row['bgimage'];
      echo '<div class="span3" style="width:20%;height:20%"><img src="'.$img1.'" alt="" /></div><div class="span8"><h2 style="word-wrap:break-word;margin-left:24%;">'.$clubname.' Club</h2></div>';
     
     
     ?>
    
  </div>
  <section id="th-slider">
  <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2" style="margin-left:2.5%">
  <?php
  for($i=1;$i<=5;$i++){
  	$imagename='image_name'.''.$i;
  $kamalimg=$row[$imagename];
  $p='resized_';
  	$img=$s.''.$clubname.'/'.$kamalimg;
  	
 echo '
      <div data-thumb="'.$img.'" data-src="'.$img.'">
          <div class="camera_caption fadeFromBottom">
              Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
          </div>
      </div>';
   }
      ?>
     <!-- <div data-thumb="assets/img/camera/slides/thumbs/leaf.jpg" data-src="assets/img/camera/slides/leaf.jpg">
          <div class="camera_caption fadeFromBottom">
              It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/road.jpg" data-src="assets/img/camera/slides/road.jpg">
          <div class="camera_caption fadeFromBottom">
              <em>It's completely free</em> (even if a donation is appreciated)
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/sea.jpg" data-src="assets/img/camera/slides/sea.jpg">
          <div class="camera_caption fadeFromBottom">
              Camera slideshow provides many options <em>to customize your project</em> as more as possible
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/shelter.jpg" data-src="assets/img/camera/slides/shelter.jpg">
          <div class="camera_caption fadeFromBottom">
              It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
          </div>
      </div>
      <div data-thumb="assets/img/camera/slides/thumbs/tree.jpg" data-src="assets/img/camera/slides/tree.jpg">
          <div class="camera_caption fadeFromBottom">
              Different color skins and layouts available, <em>fullscreen ready too</em>
          </div>
      </div>
      
     -->
  </div><!-- #camera_wrap_2 -->
  <div style="clear:both;"></div>

</section>



</div>

  </div>
  
    
    <script src="assets/js/prettify.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/application.js"></script>
    
    <script src='assets/js/jquery.mobile.customized.min.js'></script>
    <script src='assets/js/jquery.easing.1.3.js'></script> 
    <script src='assets/js/camera.min.js'></script>


<?php

$desc=$row['description'];
echo '<div class="span12" id="descr" style="margin-top:1%">';
echo '<div class="page-header span12" >
     
    <div class="span12" style="x;"><h2 style="word-wrap:break-word;margin-top:1%;text-align:center">Description</h2></div>
  </div>';
echo "<div class='container' style='word-wrap:break-word;margin-top:10px;color:green;font-size:20px';line-height:14px;>";
echo "<p class='span12'>".$desc."</p>";
 echo "</div>";
 
echo '<div class="page-header" class="span12" style="text-align:center;">
    <h2 style="word-wrap:break-word">Coordinators</h2>
  </div>';
$query="select * from `$dbname`.`mainmember` where `clubname`='$clubname'";

$result=mysql_query($query);

$name1="";
$email1="";
$mob1="";
$name2="";
$email2="";
$mob2="";
echo "<div class='container' class='span12' style='margin-top:10px;color:green;font-size:20px';line-height:14px;>";
$car=array('1st','2nd','3rd','4th');
$count=0;
while($row=mysql_fetch_array($result)) {
	$name1=$row['name'];
   $email1=$row['email_id'];
   $mob1=$row['mob_no'];
	echo '<div class="span5">';
echo '<h3>'.$car[$count++].' Coordinator:</h3>';

echo '<p><h5>name:</h5>  '.$name1.'</p>';
echo '<p><h5>email-id:</h5>  '.$email1.'</p>';
echo '<p><h5>mob-no.:</h5>  '.$mob1.'</p>';
echo '</div>';
}


/*
echo '<div class="span6">';
echo '<h3>2nd Coordinator:</h3>';
echo '<p>name:</p>';
echo '<p>email-id:</p>';
echo '<p>mob-no.:</p>';
echo '</div>';*/
echo '</div>';



?>
</div>

<?php
}

else {
	echo "some error occured to extract data";
	}
?>

  
